<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Subscriptions & Billing | TimeTrack</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="min-h-screen bg-[#fff8f7] text-[#241919]">
@php($payments = session('billing_records', []))
<main class="mx-auto max-w-5xl p-8">
    <a class="text-sm font-semibold text-[#a63143]" href="{{ route('super.admin') }}">← Super Admin Dashboard</a>
    <header class="mt-6"><p class="text-xs font-bold uppercase tracking-widest text-[#a63143]">Platform Control</p><h1 class="mt-1 text-3xl font-bold">Subscriptions &amp; Billing</h1><p class="mt-2 text-sm text-[#574142]">Record verified customer payments, review them, and activate accounts.</p></header>
    @if (session('success'))<div class="mt-6 rounded-lg bg-[#f6fff4] p-4 text-sm font-semibold text-[#006a3b]">{{ session('success') }}</div>@endif
    @if ($errors->any())<div class="mt-6 rounded-lg bg-[#ffdad6] p-4 text-sm font-semibold text-[#93000a]">{{ $errors->first() }}</div>@endif
    <section class="mt-6 rounded-xl bg-white p-6 shadow-sm">
        <h2 class="text-xl font-bold">Record Customer Payment</h2>
        <form class="mt-5 grid gap-4 md:grid-cols-2" method="POST" action="{{ route('super.admin.billing.record') }}">
            @csrf
            <label class="text-sm font-semibold">Business Name<input name="business_name" class="mt-1 w-full rounded-lg border border-[#f3dedd] p-3" required></label>
            <label class="text-sm font-semibold">Customer Email<input name="customer_email" type="email" class="mt-1 w-full rounded-lg border border-[#f3dedd] p-3" required></label>
            <label class="text-sm font-semibold">Plan<select name="plan" class="mt-1 w-full rounded-lg border border-[#f3dedd] p-3"><option>Starter</option><option>Business Pro</option><option>Enterprise</option></select></label>
            <label class="text-sm font-semibold">Amount in PHP<input name="amount" type="number" min="0" step="0.01" placeholder="149" class="mt-1 w-full rounded-lg border border-[#f3dedd] p-3" required></label>
            <label class="text-sm font-semibold">Payment Method<select name="payment_method" class="mt-1 w-full rounded-lg border border-[#f3dedd] p-3"><option>GCash</option><option>Bank Transfer</option><option>Credit/Debit Card</option><option>PayMaya</option></select></label>
            <label class="text-sm font-semibold">Payment Reference<input name="reference" placeholder="Receipt or transaction number" class="mt-1 w-full rounded-lg border border-[#f3dedd] p-3" required></label>
            <button class="inline-flex items-center justify-center gap-2 rounded-full bg-[#a63143] px-5 py-3 font-semibold text-white md:col-span-2" type="submit">Record Payment</button>
        </form>
    </section>
    <section class="mt-6 rounded-xl bg-white p-6 shadow-sm"><h2 class="text-xl font-bold">Payment Review &amp; Account Activation</h2>
        @forelse ($payments as $index => $payment)
            <div class="mt-4 flex flex-wrap items-center justify-between gap-4 rounded-lg border border-[#f3dedd] p-4"><div><strong>{{ $payment['business_name'] }}</strong><p class="text-sm text-[#574142]">{{ $payment['customer_email'] }} · {{ $payment['plan'] }} · ₱{{ number_format((float) $payment['amount'], 2) }}</p><small class="text-[#574142]">{{ $payment['payment_method'] }} · Ref: {{ $payment['reference'] }}</small></div><div class="flex items-center gap-3"><span class="rounded-full px-3 py-1 text-xs font-semibold {{ $payment['account_status'] === 'active' ? 'bg-[#f6fff4] text-[#006a3b]' : 'bg-[#fff0f0] text-[#a63143]' }}">{{ ucfirst(str_replace('_', ' ', $payment['account_status'])) }}</span>@if ($payment['account_status'] !== 'active')<form method="POST" action="{{ route('super.admin.billing.activate', $index) }}">@csrf<button class="rounded-full bg-[#006a3b] px-4 py-2 text-sm font-semibold text-white" type="submit">Activate Account</button></form>@endif</div></div>
        @empty
            <p class="mt-4 rounded-lg bg-[#fff0f0] p-5 text-sm text-[#574142]">No customer payments recorded yet.</p>
        @endforelse
    </section>
</main>
</body>
</html>
