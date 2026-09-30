<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="web_dashboard" name="shell-type"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
@layer base {
  html, body {
    margin: 0;
    padding: 0;
  }
  body {
    overscroll-behavior: none;
  }
  main > :first-child {
    margin-top: 0 !important;
  }
  main > :last-child {
    margin-bottom: 0 !important;
  }
}
::-webkit-scrollbar {
  display: none;
}
</style>
<script src="https://cdn.tailwindcss.com"></script>
<script id="tailwind-config">
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      "colors": {
        "secondary-fixed": "#ffdadb",
        "on-primary-fixed": "#40000d",
        "outline": "#8a7172",
        "inverse-surface": "#3a2d2d",
        "secondary-fixed-dim": "#ffb2b7",
        "surface-container-low": "#fff0f0",
        "tertiary": "#006a3b",
        "primary-fixed-dim": "#ffb2b7",
        "error": "#ba1a1a",
        "on-tertiary-container": "#f6fff4",
        "outline-variant": "#debfc0",
        "on-secondary": "#ffffff",
        "on-secondary-fixed-variant": "#6d363b",
        "on-surface": "#241919",
        "primary-fixed": "#ffdadb",
        "tertiary-fixed-dim": "#5ede92",
        "on-surface-variant": "#574142",
        "on-error": "#ffffff",
        "on-secondary-fixed": "#380c12",
        "background": "#fff8f7",
        "surface-container-lowest": "#ffffff",
        "inverse-on-surface": "#ffedec",
        "inverse-primary": "#ffb2b7",
        "primary": "#a63143",
        "secondary-container": "#ffb2b7",
        "surface-container-high": "#f9e3e3",
        "surface-bright": "#fff8f7",
        "primary-container": "#c64959",
        "on-primary": "#ffffff",
        "tertiary-container": "#00864c",
        "surface-tint": "#a93345",
        "on-secondary-container": "#7b4147",
        "surface-variant": "#f3dedd",
        "surface-container": "#ffe9e9",
        "on-primary-fixed-variant": "#891a2f",
        "surface-dim": "#ead5d5",
        "surface-container-highest": "#f3dedd",
        "surface": "#fff8f7",
        "on-tertiary-fixed": "#00210e",
        "on-tertiary": "#ffffff",
        "error-container": "#ffdad6",
        "on-error-container": "#93000a",
        "on-primary-container": "#fffbff",
        "on-background": "#241919",
        "tertiary-fixed": "#7cfbac",
        "on-tertiary-fixed-variant": "#00522c",
        "secondary": "#894d52"
      },
      "borderRadius": {
        "DEFAULT": "0.25rem",
        "lg": "0.5rem",
        "xl": "0.75rem",
        "full": "9999px"
      },
      "spacing": {
        "space-lg": "1.5rem",
        "gutter-tablet": "1.5rem",
        "margin": "1rem",
        "space-md": "1rem",
        "gutter": "1rem",
        "margin-desktop": "3rem",
        "margin-tablet": "2rem",
        "space-xs": "0.25rem",
        "gutter-desktop": "2rem",
        "space-sm": "0.5rem",
        "space-xl": "2rem"
      },
      "fontFamily": {
        "label-lg": ["Inter"],
        "mono-metric": ["Inter"],
        "label-sm": ["Inter"],
        "headline-sm": ["Plus Jakarta Sans"],
        "display-time-lg": ["Plus Jakarta Sans"],
        "body-lg": ["Inter"],
        "body-md": ["Inter"],
        "headline-md": ["Plus Jakarta Sans"],
        "body-sm": ["Inter"],
        "headline-lg": ["Plus Jakarta Sans"],
        "display-time-mobile": ["Plus Jakarta Sans"],
        "label-md": ["Inter"]
      },
      "fontSize": {
        "label-lg": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "600"}],
        "mono-metric": ["15px", {"lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "500"}],
        "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "600"}],
        "headline-sm": ["18px", {"lineHeight": "24px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
        "display-time-lg": ["48px", {"lineHeight": "52px", "letterSpacing": "-0.03em", "fontWeight": "700"}],
        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
        "headline-md": ["22px", {"lineHeight": "28px", "letterSpacing": "-0.015em", "fontWeight": "600"}],
        "body-sm": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
        "headline-lg": ["28px", {"lineHeight": "36px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
        "display-time-mobile": ["40px", {"lineHeight": "44px", "letterSpacing": "-0.025em", "fontWeight": "700"}],
        "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}]
      }
    }
  }
};
</script>
</head>
<body class="bg-background font-body-md text-on-surface antialiased">
<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest z-50 flex flex-col justify-between py-space-md shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
<div class="flex flex-col gap-space-md">
<div class="px-space-lg flex items-center gap-space-sm h-12">
<img alt="TimeTrack Super Admin" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1WWP_i-caE0stILPpvuBK9nwR7PlE5Ht13hDuT6URQxi-QCzKMnd3RURJCxzn5YG56n6YUroRES6P6wRwQ4bCdU1MC2x8dVvCndz021dpkNv4dM0Q1MLBztRUhHRNW_FxnqT-QjZJPBQ6b5ueR2BUK40O3RJ_0aM_XqgMngE4MiyHOlAx_xN2StcWnVI9Zk7k5-jZjfsF1XvuGR1oMJy2NLyx3H0v3OwUE4QzzQoVoNatEi1LfndRq4oOAU"/>
<span class="font-headline-sm text-headline-sm text-primary font-bold tracking-tight">TimeTrack</span>
<span class="ml-auto px-space-xs py-0.5 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm tracking-wider uppercase">SUPER ADMIN</span>
</div>
<div class="px-space-lg pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Control Plane</span>
</div>
<nav class="flex flex-col gap-space-xs px-space-md" data-active-classes="bg-primary-container text-on-primary-container font-bold rounded-lg shadow-sm">
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="dashboard-overview" href="#">Dashboard</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="subscription-billing" href="#">Subscription &amp; Billing</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="platform-analytics" href="#">Platform Analytics</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="customer-activity" href="#">Customer Activity</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="support-tickets" href="#">Support Tickets</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="platform-health" href="#">Platform Health</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="system-settings" href="#">System Settings</a>
</nav>
</div>
<div class="px-space-md flex flex-col gap-space-sm">
<div class="p-space-md rounded-xl bg-surface-container flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-tertiary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">health_and_safety</span>
        All SaaS Systems 99.98%
      </div>
<div class="font-label-sm text-label-sm text-on-surface-variant">SaaS Admin Node v4.18.2</div>
</div>
</div>
</aside>
<div class="pl-72">
<header class="fixed top-0 left-72 right-0 h-16 bg-surface/85 backdrop-blur-xl z-40 flex items-center justify-between px-gutter-desktop shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
<div class="flex items-center gap-space-md">
<div class="flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container font-label-md text-label-md text-on-surface">
<span class="material-symbols-outlined text-base text-primary">verified_user</span>
<span class="font-semibold">Global Cloud Platform</span>
<span class="text-outline-variant">/</span>
<span class="text-on-surface-variant">Multi-Tenant Root</span>
</div>
<div class="hidden lg:flex items-center gap-space-sm px-space-md py-1.5 rounded-full bg-surface-container-low">
<span class="material-symbols-outlined text-lg text-on-surface-variant">search</span>
<input class="bg-transparent border-0 outline-none text-on-surface font-body-sm text-body-sm w-72 placeholder:text-on-surface-variant" placeholder="Search tenants, MRR, subscriptions, tickets..." type="text"/>
</div>
</div>
<div class="flex items-center gap-space-md">
<button aria-label="Notifications" class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors relative" type="button">
<span class="material-symbols-outlined text-xl">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-primary"></span>
</button>
<button aria-label="Quick Actions" class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors" type="button">
<span class="material-symbols-outlined text-xl">bolt</span>
</button>
<div class="flex items-center gap-space-sm pl-space-sm border-l border-outline-variant/40">
<div class="text-right hidden sm:block">
<div class="font-label-md text-label-md text-on-surface">Devon Campbell</div>
<div class="font-label-sm text-label-sm text-on-surface-variant">Platform Owner</div>
</div>
<img alt="Devon Campbell Profile" class="w-9 h-9 rounded-full object-cover ring-2 ring-primary/20" src="https://lh3.googleusercontent.com/aida/AEtjO1XaCBK3w4MbyTDu4BNzinBTUC1BaSWGvH3pcRQpJeEAIj4XN5HfIxMlMkJeIU0sZpqBxe4PS-1rQ4xo_VFSM1cHTb7e7oKhKFp56ySKc0PhVWKb69U8aVAICvVkWavB4fjqp-I0ukClDi9vJmWxzFzF7J4j_uqI0i1O5SXNRoqf69eJOQV5LNgJugZxICc8YEdhlC7s27R8_NRGvBVbrNDk86YeILqJnnTM4XuZlwE2HBaSvk3AZpThIhEb"/>
</div>
</div>
</header>
<main class="relative pt-16 bg-background min-h-screen px-gutter-desktop py-space-lg"><div class="flex flex-col w-full">
<!-- Top View Heading & Operational Controls -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md mb-space-lg">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
<span>SaaS Finance Operations</span>
<span>•</span>
<span class="text-primary font-semibold">Live Billing Engine</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Subscription &amp; Billing Operations</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Real-time tenant ARR/MRR velocity, recurring payment settlement gateways, and manual collection ledger.</p>
</div>
<!-- Cycle Selector & Action Utility Cluster -->
<div class="flex flex-wrap items-center gap-space-sm">
<!-- Date Cycle Chip Selector -->
<div class="flex items-center gap-space-xs px-space-md py-2 rounded-full bg-surface-container shadow-sm">
<span class="material-symbols-outlined text-base text-primary">calendar_month</span>
<span class="font-label-md text-label-md text-on-surface font-semibold">Oct 2024 (Current Cycle)</span>
<button aria-label="Cycle options" class="text-on-surface-variant hover:text-on-surface ml-1 flex items-center" type="button">
<span class="material-symbols-outlined text-base">expand_more</span>
</button>
</div>
<!-- Export Trigger -->
<div class="relative group">
<button class="flex items-center gap-space-xs px-space-md py-2 rounded-full bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-label-md text-label-md transition-colors shadow-sm" type="button">
<span class="material-symbols-outlined text-base">file_download</span>
<span>Export Invoices</span>
<span class="material-symbols-outlined text-sm">arrow_drop_down</span>
</button>
<div class="hidden group-hover:flex flex-col absolute right-0 top-full mt-1 w-44 rounded-xl bg-surface-container-lowest shadow-xl py-space-xs z-30">
<a class="px-space-md py-2 font-label-sm text-label-sm text-on-surface hover:bg-surface-container flex items-center justify-between" href="#">
<span>Export CSV Ledger</span>
<span class="font-mono-metric text-on-surface-variant text-[10px]">.CSV</span>
</a>
<a class="px-space-md py-2 font-label-sm text-label-sm text-on-surface hover:bg-surface-container flex items-center justify-between" href="#">
<span>Export Financial PDF</span>
<span class="font-mono-metric text-on-surface-variant text-[10px]">.PDF</span>
</a>
</div>
</div>
<!-- Record Manual Payment CTA -->
<button class="flex items-center gap-space-xs px-space-lg py-2.5 rounded-full bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg transition-transform active:scale-[0.98] shadow-md" onclick="document.getElementById('manualPaymentModal').classList.toggle('hidden')" type="button">
<span class="material-symbols-outlined text-lg">add_circle</span>
<span>Record Manual Payment</span>
</button>
</div>
</div>
<!-- Primary Financial KPI Bento Grid (4 Cards) -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md mb-space-lg">
<!-- Card 1: MRR with Tier Mix Breakdown -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Monthly Recurring Revenue</span>
<span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full bg-surface-container-low text-tertiary font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-sm">trending_up</span>
          +12.4% MoM
        </span>
</div>
<div>
<div class="flex items-baseline gap-space-xs">
<span class="font-mono-metric text-xl font-bold text-primary">₱</span>
<span class="font-display-time-lg text-display-time-lg text-on-surface">148,250</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant mt-1">Normalized gross monthly recurring stream</div>
</div>
<!-- Tier Mix Sub-breakdown -->
<div class="mt-space-md pt-space-sm bg-surface-container-low/60 -mx-space-lg -mb-space-lg px-space-lg pb-space-md rounded-b-xl flex flex-col gap-1.5">
<div class="flex items-center justify-between text-[11px] font-label-sm text-on-surface-variant">
<span>Starter (₱149/mo)</span>
<span class="font-mono-metric text-on-surface font-medium">₱26,820 <span class="text-on-surface-variant font-normal">(18%)</span></span>
</div>
<div class="flex items-center justify-between text-[11px] font-label-sm text-on-surface-variant">
<span>Business Pro (₱299/mo)</span>
<span class="font-mono-metric text-on-surface font-semibold text-primary">₱74,750 <span class="text-on-surface-variant font-normal">(50%)</span></span>
</div>
<div class="flex items-center justify-between text-[11px] font-label-sm text-on-surface-variant">
<span>Enterprise (₱499/mo)</span>
<span class="font-mono-metric text-on-surface font-medium">₱46,680 <span class="text-on-surface-variant font-normal">(32%)</span></span>
</div>
</div>
</div>
<!-- Card 2: ARR Projection -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Annual Run Rate (ARR)</span>
<span class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed">
<span class="material-symbols-outlined text-base">payments</span>
</span>
</div>
<div class="flex items-baseline gap-space-xs">
<span class="font-mono-metric text-xl font-bold text-secondary">₱</span>
<span class="font-display-time-lg text-display-time-lg text-on-surface">1,779,000</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant mt-1">Calculated as annualized current billing run</div>
</div>
<!-- Trend Sparkline Graphic -->
<div class="mt-space-md">
<div class="flex items-center justify-between text-label-sm font-label-sm text-on-surface-variant mb-1">
<span>Q1-Q4 Projection Pace</span>
<span class="text-tertiary font-semibold">108.2% to target</span>
</div>
<svg class="w-full h-9 text-tertiary" fill="none" viewbox="0 0 240 36">
<path d="M0 32 L30 28 L65 24 L100 27 L135 18 L170 14 L205 9 L240 4" stroke="currentColor" stroke-linecap="round" stroke-width="2.5"></path>
<path d="M0 32 L30 28 L65 24 L100 27 L135 18 L170 14 L205 9 L240 4 V36 H0 Z" fill="currentColor" fill-opacity="0.12"></path>
</svg>
</div>
</div>
<!-- Card 3: Active Paid Tenants -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Paid Tenant Portfolio</span>
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm font-semibold text-on-surface">Total: 458</span>
</div>
<div class="flex items-baseline gap-space-xs">
<span class="font-display-time-lg text-display-time-lg text-on-surface">412</span>
<span class="font-headline-sm text-headline-sm text-on-surface-variant">Paid Businesses</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant mt-1">Contract active with automated billing card/wallet</div>
</div>
<div class="mt-space-md grid grid-cols-2 gap-2">
<div class="p-space-xs rounded-lg bg-surface-container-low flex flex-col">
<span class="font-label-sm text-[10px] text-on-surface-variant uppercase">38 Trialing</span>
<span class="font-label-md text-label-md font-bold text-on-surface">8.3% Pipeline</span>
</div>
<div class="p-space-xs rounded-lg bg-error-container/40 flex flex-col">
<span class="font-label-sm text-[10px] text-error uppercase">8 Past Due</span>
<span class="font-label-md text-label-md font-bold text-error">1.7% At-Risk</span>
</div>
</div>
</div>
<!-- Card 4: ARPU (Average Revenue Per Tenant) -->
<div class="rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">Average Revenue / Tenant</span>
<span class="w-8 h-8 rounded-full bg-surface-container-high flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-base">group_work</span>
</span>
</div>
<div class="flex items-baseline gap-space-xs">
<span class="font-mono-metric text-xl font-bold text-primary">₱</span>
<span class="font-display-time-lg text-display-time-lg text-on-surface">359.80</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">/mo</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant mt-1">Blended rate across Starter, Business &amp; Enterprise</div>
</div>
<!-- Tier expansion comparison bar -->
<div class="mt-space-md flex flex-col gap-1">
<div class="flex justify-between text-[11px] font-label-sm text-on-surface-variant">
<span>Tier Upgrades (Q3 vs Q4)</span>
<span class="text-tertiary font-bold">+₱41.20</span>
</div>
<div class="h-2 w-full bg-surface-container rounded-full overflow-hidden flex">
<div class="bg-primary/40 h-full" style="width: 25%"></div>
<div class="bg-primary h-full" style="width: 50%"></div>
<div class="bg-primary-container h-full" style="width: 25%"></div>
</div>
</div>
</div>
</div>
<!-- Operational Middle Section: Visual Revenue Mix & Gateway Telemetry -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-md mb-space-lg">
<!-- Subscription Tier Revenue Mix & Velocity (7 Columns) -->
<div class="lg:col-span-7 rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between mb-space-md">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Revenue Velocity &amp; Plan Distribution</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Active subscription distribution across Philippine tenant segments</p>
</div>
<span class="px-space-sm py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface font-semibold">412 Subscriptions</span>
</div>
<!-- Visual Distribution Stack Bar -->
<div class="flex flex-col gap-space-xs my-space-xs">
<div class="h-4 w-full rounded-full overflow-hidden flex gap-0.5 bg-surface-container p-0.5">
<div class="h-full rounded-l-full bg-secondary" style="width: 18%" title="Starter: 18% (180 Tenants)"></div>
<div class="h-full bg-primary" style="width: 50.4%" title="Business Pro: 50.4% (250 Tenants)"></div>
<div class="h-full rounded-r-full bg-primary-container" style="width: 31.6%" title="Enterprise: 31.6% (94 Tenants)"></div>
</div>
</div>
<!-- Plan Metrics Matrix -->
<div class="grid grid-cols-3 gap-space-sm mt-space-md">
<div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col gap-1">
<div class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
<span class="font-label-md text-label-md font-semibold text-on-surface">Starter</span>
</div>
<div class="font-headline-sm text-headline-sm text-on-surface font-bold">₱149<span class="text-xs font-normal text-on-surface-variant">/mo</span></div>
<div class="font-label-sm text-label-sm text-on-surface-variant">180 active tenants</div>
<div class="font-mono-metric text-label-sm text-secondary font-semibold">₱26,820 MRR</div>
</div>
<div class="p-space-sm rounded-lg bg-surface-container flex flex-col gap-1">
<div class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
<span class="font-label-md text-label-md font-semibold text-primary">Business Pro</span>
</div>
<div class="font-headline-sm text-headline-sm text-primary font-bold">₱299<span class="text-xs font-normal text-on-surface-variant">/mo</span></div>
<div class="font-label-sm text-label-sm text-on-surface-variant">250 active tenants</div>
<div class="font-mono-metric text-label-sm text-primary font-semibold">₱74,750 MRR</div>
</div>
<div class="p-space-sm rounded-lg bg-surface-container-high flex flex-col gap-1">
<div class="flex items-center gap-1.5">
<span class="w-2.5 h-2.5 rounded-full bg-primary-container"></span>
<span class="font-label-md text-label-md font-semibold text-on-surface">Enterprise</span>
</div>
<div class="font-headline-sm text-headline-sm text-on-surface font-bold">₱499<span class="text-xs font-normal text-on-surface-variant">/mo</span></div>
<div class="font-label-sm text-label-sm text-on-surface-variant">94 active tenants</div>
<div class="font-mono-metric text-label-sm text-on-surface font-semibold">₱46,680 MRR</div>
</div>
</div>
</div>
<!-- Payment Gateways Operational Health (5 Columns) -->
<div class="lg:col-span-5 rounded-xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col justify-between">
<div class="flex items-center justify-between mb-space-sm">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface">Settlement Gateways</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Philippine direct clearing channels health</p>
</div>
<span class="flex items-center gap-1 px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
          Gateways Optimal
        </span>
</div>
<div class="flex flex-col gap-space-sm">
<!-- Gateway 1: GCash / Maya -->
<div class="p-space-sm rounded-lg bg-surface-container-low flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-surface-container-lowest flex items-center justify-center text-primary shadow-xs">
<span class="material-symbols-outlined text-xl">account_balance_wallet</span>
</div>
<div>
<div class="font-label-md text-label-md font-semibold text-on-surface">GCash / Maya Direct E-Wallet</div>
<div class="font-body-sm text-[11px] text-on-surface-variant">PayMongo Webhook Node PH-1</div>
</div>
</div>
<div class="text-right">
<div class="font-label-md text-label-md font-bold text-tertiary">99.4% Success</div>
<div class="font-mono-metric text-[11px] text-on-surface-variant">1,204 txns cleared</div>
</div>
</div>
<!-- Gateway 2: Cards -->
<div class="p-space-sm rounded-lg bg-surface-container-low flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-surface-container-lowest flex items-center justify-center text-primary shadow-xs">
<span class="material-symbols-outlined text-xl">credit_card</span>
</div>
<div>
<div class="font-label-md text-label-md font-semibold text-on-surface">Visa / Mastercard Recurring</div>
<div class="font-body-sm text-[11px] text-on-surface-variant">3D Secure 2.0 Auth Pass</div>
</div>
</div>
<div class="text-right">
<div class="font-label-md text-label-md font-bold text-tertiary">98.9% Success</div>
<div class="font-mono-metric text-[11px] text-on-surface-variant">542 txns cleared</div>
</div>
</div>
<!-- Gateway 3: Bank Transfer / Over-The-Counter -->
<div class="p-space-sm rounded-lg bg-surface-container-low flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-lg bg-surface-container-lowest flex items-center justify-center text-primary shadow-xs">
<span class="material-symbols-outlined text-xl">account_balance</span>
</div>
<div>
<div class="font-label-md text-label-md font-semibold text-on-surface">Direct Bank / OTC (BDO &amp; BPI)</div>
<div class="font-body-sm text-[11px] text-on-surface-variant">Manual Reference Clearing Queue</div>
</div>
</div>
<div class="text-right">
<div class="font-label-md text-label-md font-bold text-on-surface">12 Pending Match</div>
<div class="font-mono-metric text-[11px] text-on-surface-variant">₱14,850 in queue</div>
</div>
</div>
</div>
</div>
</div>
<!-- Invoicing & Dunning Alerts Drawer (3 Immediate Follow-ups) -->
<div class="mb-space-lg rounded-xl bg-surface-container p-space-lg shadow-sm">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-xs mb-space-md">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-xl text-error">warning</span>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Past-Due &amp; Grace Period Alerts (3 Immediate Tenant Actions)</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Dunning automations active: automated retry schedule engaged with 72-hour grace period window</p>
</div>
</div>
<span class="px-space-sm py-1 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold">Action Required</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
<!-- Dunning Item 1 -->
<div class="p-space-md rounded-lg bg-surface-container-lowest shadow-sm flex flex-col justify-between gap-space-sm">
<div>
<div class="flex items-center justify-between mb-1">
<span class="font-label-md text-label-md font-bold text-on-surface">Iloilo Agro-Mart Supplies</span>
<span class="px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold">4 Days Overdue</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Owner: Carlos Magno • Plan: Business Pro</div>
<div class="font-mono-metric text-label-lg font-bold text-error mt-2">₱299.00 Outstanding</div>
<div class="font-body-sm text-[11px] text-on-surface-variant mt-0.5">GCash e-wallet payment failed (Insufficient balance)</div>
</div>
<div class="flex items-center gap-2 pt-2">
<button class="flex-1 py-1.5 px-space-xs rounded-full bg-primary hover:bg-primary-container text-on-primary font-label-sm text-label-sm font-semibold transition-colors flex items-center justify-center gap-1" type="button">
<span class="material-symbols-outlined text-sm">send</span>
            SMS / Email
          </button>
<button class="py-1.5 px-3 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors" type="button">
            +3 Days Grace
          </button>
</div>
</div>
<!-- Dunning Item 2 -->
<div class="p-space-md rounded-lg bg-surface-container-lowest shadow-sm flex flex-col justify-between gap-space-sm">
<div>
<div class="flex items-center justify-between mb-1">
<span class="font-label-md text-label-md font-bold text-on-surface">Pampanga Cold Storage Depot</span>
<span class="px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold">2 Days Overdue</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Owner: Michelle Santos • Plan: Enterprise</div>
<div class="font-mono-metric text-label-lg font-bold text-error mt-2">₱499.00 Outstanding</div>
<div class="font-body-sm text-[11px] text-on-surface-variant mt-0.5">Maya Direct token expired (Needs re-authorization)</div>
</div>
<div class="flex items-center gap-2 pt-2">
<button class="flex-1 py-1.5 px-space-xs rounded-full bg-primary hover:bg-primary-container text-on-primary font-label-sm text-label-sm font-semibold transition-colors flex items-center justify-center gap-1" type="button">
<span class="material-symbols-outlined text-sm">send</span>
            SMS / Email
          </button>
<button class="py-1.5 px-3 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors" type="button">
            +3 Days Grace
          </button>
</div>
</div>
<!-- Dunning Item 3 -->
<div class="p-space-md rounded-lg bg-surface-container-lowest shadow-sm flex flex-col justify-between gap-space-sm">
<div>
<div class="flex items-center justify-between mb-1">
<span class="font-label-md text-label-md font-bold text-on-surface">Baguio Creative Print House</span>
<span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">Grace Period: 24h</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Owner: Joshua Bagatsing • Plan: Starter</div>
<div class="font-mono-metric text-label-lg font-bold text-on-surface mt-2">₱149.00 Due</div>
<div class="font-body-sm text-[11px] text-on-surface-variant mt-0.5">Card bank decline 05 (Do Not Honor - Card Locked)</div>
</div>
<div class="flex items-center gap-2 pt-2">
<button class="flex-1 py-1.5 px-space-xs rounded-full bg-primary hover:bg-primary-container text-on-primary font-label-sm text-label-sm font-semibold transition-colors flex items-center justify-center gap-1" type="button">
<span class="material-symbols-outlined text-sm">send</span>
            SMS / Email
          </button>
<button class="py-1.5 px-3 rounded-full bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors" type="button">
            +3 Days Grace
          </button>
</div>
</div>
</div>
</div>
<!-- Tenant Subscriptions & Invoicing Ledger Table -->
<div class="rounded-xl bg-surface-container-lowest shadow-sm overflow-hidden flex flex-col">
<!-- Filter and Control Bar -->
<div class="p-space-lg flex flex-col md:flex-row md:items-center justify-between gap-space-md bg-surface-container-lowest">
<div class="flex flex-1 items-center gap-space-sm max-w-lg px-space-md py-2 rounded-full bg-surface-container-low">
<span class="material-symbols-outlined text-on-surface-variant text-lg">search</span>
<input class="w-full bg-transparent border-0 outline-none text-on-surface font-body-sm text-body-sm placeholder:text-on-surface-variant" id="tenantSearchInput" placeholder="Filter by tenant company, owner, or invoice ref..." type="text"/>
</div>
<!-- Segmented Plan Filters -->
<div class="flex flex-wrap items-center gap-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant mr-1">Plan:</span>
<button class="px-space-md py-1.5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-semibold" type="button">All</button>
<button class="px-space-md py-1.5 rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high font-label-sm text-label-sm font-medium transition-colors" type="button">Starter (₱149)</button>
<button class="px-space-md py-1.5 rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high font-label-sm text-label-sm font-medium transition-colors" type="button">Business (₱299)</button>
<button class="px-space-md py-1.5 rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high font-label-sm text-label-sm font-medium transition-colors" type="button">Enterprise (₱499)</button>
<span class="font-label-sm text-label-sm text-on-surface-variant ml-2 mr-1">Status:</span>
<select class="px-space-md py-1.5 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm outline-none cursor-pointer">
<option>All Statuses</option>
<option>Active Paid</option>
<option>Trialling (14d)</option>
<option>Grace Period</option>
<option>Past Due</option>
</select>
</div>
</div>
<!-- Data Table Container -->
<div class="overflow-x-auto w-full">
<table class="w-full text-left border-collapse">
<thead class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm tracking-wider uppercase">
<tr>
<th class="py-space-md px-space-lg">Tenant Organization &amp; Owner</th>
<th class="py-space-md px-space-md">Subscribed Plan</th>
<th class="py-space-md px-space-md text-center">Seats</th>
<th class="py-space-md px-space-md">Cycle</th>
<th class="py-space-md px-space-md">Last Payment</th>
<th class="py-space-md px-space-md">Next Invoice</th>
<th class="py-space-md px-space-md">Method</th>
<th class="py-space-md px-space-md">Status</th>
<th class="py-space-md px-space-lg text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container text-on-surface font-body-sm text-body-sm">
<!-- Row 1: Metro Logistics Manila -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex items-center gap-space-sm">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center font-bold text-primary font-headline-sm">
                  ML
                </div>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">Metro Logistics Manila</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Rodrigo Villanueva • Pasig Hub</div>
</div>
</div>
</td>
<td class="py-space-md px-space-md">
<div class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm font-bold">
                Enterprise
              </div>
<div class="font-mono-metric text-[12px] text-on-surface-variant mt-0.5">₱499.00 / mo</div>
</td>
<td class="py-space-md px-space-md text-center">
<span class="font-mono-metric font-semibold text-on-surface">148</span>
<span class="block text-[11px] text-on-surface-variant">Staff Active</span>
</td>
<td class="py-space-md px-space-md">
<span class="font-label-sm text-label-sm text-on-surface">Monthly</span>
<span class="block text-[11px] text-on-surface-variant">Renews 1st</span>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric text-on-surface">01 Oct 2024</div>
<div class="text-[11px] text-tertiary flex items-center gap-0.5">
<span class="material-symbols-outlined text-xs">check_circle</span>
                ₱499 Cleared
              </div>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric font-bold text-on-surface">₱499.00</div>
<div class="text-[11px] text-on-surface-variant">Due 01 Nov 2024</div>
</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1.5">
<span class="px-2 py-0.5 rounded bg-surface-container text-primary font-label-sm text-label-sm font-bold">GCASH</span>
<span class="font-mono-metric text-xs text-on-surface-variant">•0917-882</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container-low text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                Active Paid
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 rounded-full hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="View Invoice" type="button">
<span class="material-symbols-outlined text-base">receipt_long</span>
</button>
<button class="p-1.5 rounded-full hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="Manage Plan" type="button">
<span class="material-symbols-outlined text-base">tune</span>
</button>
</div>
</td>
</tr>
<!-- Row 2: Kape't Milktea Hub QC -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex items-center gap-space-sm">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center font-bold text-primary font-headline-sm">
                  KM
                </div>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">Kape't Milktea Hub QC</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Bernadette De Silva • Tomas Morato</div>
</div>
</div>
</td>
<td class="py-space-md px-space-md">
<div class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-bold">
                Business Pro
              </div>
<div class="font-mono-metric text-[12px] text-on-surface-variant mt-0.5">₱299.00 / mo</div>
</td>
<td class="py-space-md px-space-md text-center">
<span class="font-mono-metric font-semibold text-on-surface">42</span>
<span class="block text-[11px] text-on-surface-variant">Staff Active</span>
</td>
<td class="py-space-md px-space-md">
<span class="font-label-sm text-label-sm text-on-surface">Monthly</span>
<span class="block text-[11px] text-on-surface-variant">Renews 14th</span>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric text-on-surface">14 Sep 2024</div>
<div class="text-[11px] text-tertiary flex items-center gap-0.5">
<span class="material-symbols-outlined text-xs">check_circle</span>
                ₱299 Cleared
              </div>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric font-bold text-on-surface">₱299.00</div>
<div class="text-[11px] text-on-surface-variant">Due 14 Oct 2024</div>
</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1.5">
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm font-bold">MAYA</span>
<span class="font-mono-metric text-xs text-on-surface-variant">•0928-119</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container-low text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                Active Paid
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 rounded-full hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="View Invoice" type="button">
<span class="material-symbols-outlined text-base">receipt_long</span>
</button>
<button class="p-1.5 rounded-full hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="Manage Plan" type="button">
<span class="material-symbols-outlined text-base">tune</span>
</button>
</div>
</td>
</tr>
<!-- Row 3: Cebu Fresh Supermart -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex items-center gap-space-sm">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center font-bold text-primary font-headline-sm">
                  CF
                </div>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">Cebu Fresh Supermart</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Kenneth Lim • Mandaue City</div>
</div>
</div>
</td>
<td class="py-space-md px-space-md">
<div class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-bold">
                Business Pro
              </div>
<div class="font-mono-metric text-[12px] text-on-surface-variant mt-0.5">₱299.00 / mo</div>
</td>
<td class="py-space-md px-space-md text-center">
<span class="font-mono-metric font-semibold text-on-surface">88</span>
<span class="block text-[11px] text-on-surface-variant">Staff Active</span>
</td>
<td class="py-space-md px-space-md">
<span class="font-label-sm text-label-sm text-on-surface">Annual (Save 15%)</span>
<span class="block text-[11px] text-on-surface-variant">Renews 10 Jan</span>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric text-on-surface">10 Jan 2024</div>
<div class="text-[11px] text-tertiary flex items-center gap-0.5">
<span class="material-symbols-outlined text-xs">check_circle</span>
                ₱3,050 Prepaid
              </div>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric font-bold text-on-surface">₱3,050.00</div>
<div class="text-[11px] text-on-surface-variant">Due 10 Jan 2025</div>
</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1.5">
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm font-bold">VISA</span>
<span class="font-mono-metric text-xs text-on-surface-variant">•4491</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container-low text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                Active Paid
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 rounded-full hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="View Invoice" type="button">
<span class="material-symbols-outlined text-base">receipt_long</span>
</button>
<button class="p-1.5 rounded-full hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="Manage Plan" type="button">
<span class="material-symbols-outlined text-base">tune</span>
</button>
</div>
</td>
</tr>
<!-- Row 4: Davao Builders Hardware -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex items-center gap-space-sm">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center font-bold text-primary font-headline-sm">
                  DB
                </div>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">Davao Builders Hardware</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Reynaldo Tan • Buhangin District</div>
</div>
</div>
</td>
<td class="py-space-md px-space-md">
<div class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm font-bold">
                Enterprise
              </div>
<div class="font-mono-metric text-[12px] text-on-surface-variant mt-0.5">₱499.00 / mo</div>
</td>
<td class="py-space-md px-space-md text-center">
<span class="font-mono-metric font-semibold text-on-surface">210</span>
<span class="block text-[11px] text-on-surface-variant">Staff Active</span>
</td>
<td class="py-space-md px-space-md">
<span class="font-label-sm text-label-sm text-on-surface">Monthly</span>
<span class="block text-[11px] text-on-surface-variant">Renews 28th</span>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric text-on-surface">28 Sep 2024</div>
<div class="text-[11px] text-tertiary flex items-center gap-0.5">
<span class="material-symbols-outlined text-xs">check_circle</span>
                ₱499 Cleared
              </div>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric font-bold text-on-surface">₱499.00</div>
<div class="text-[11px] text-on-surface-variant">Due 28 Oct 2024</div>
</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1.5">
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm font-bold">BDO OTC</span>
<span class="font-mono-metric text-xs text-on-surface-variant">•Ref 8219</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container-low text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                Active Paid
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 rounded-full hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="View Invoice" type="button">
<span class="material-symbols-outlined text-base">receipt_long</span>
</button>
<button class="p-1.5 rounded-full hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="Manage Plan" type="button">
<span class="material-symbols-outlined text-base">tune</span>
</button>
</div>
</td>
</tr>
<!-- Row 5: Makati Tech Studio -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex items-center gap-space-sm">
<div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center font-bold text-primary font-headline-sm">
                  MT
                </div>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">Makati Tech Studio</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Paolo Mendoza • Legaspi Village</div>
</div>
</div>
</td>
<td class="py-space-md px-space-md">
<div class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-bold">
                Starter
              </div>
<div class="font-mono-metric text-[12px] text-on-surface-variant mt-0.5">₱149.00 / mo</div>
</td>
<td class="py-space-md px-space-md text-center">
<span class="font-mono-metric font-semibold text-on-surface">16</span>
<span class="block text-[11px] text-on-surface-variant">Staff Active</span>
</td>
<td class="py-space-md px-space-md">
<span class="font-label-sm text-label-sm text-on-surface">Monthly</span>
<span class="block text-[11px] text-on-surface-variant">Renews 18th</span>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric text-on-surface">18 Sep 2024</div>
<div class="text-[11px] text-tertiary flex items-center gap-0.5">
<span class="material-symbols-outlined text-xs">check_circle</span>
                ₱149 Cleared
              </div>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric font-bold text-on-surface">₱149.00</div>
<div class="text-[11px] text-on-surface-variant">Due 18 Oct 2024</div>
</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1.5">
<span class="px-2 py-0.5 rounded bg-surface-container text-on-surface font-label-sm text-label-sm font-bold">MC</span>
<span class="font-mono-metric text-xs text-on-surface-variant">•5102</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-surface-container-low text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                Active Paid
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 rounded-full hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="View Invoice" type="button">
<span class="material-symbols-outlined text-base">receipt_long</span>
</button>
<button class="p-1.5 rounded-full hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-colors" title="Manage Plan" type="button">
<span class="material-symbols-outlined text-base">tune</span>
</button>
</div>
</td>
</tr>
<!-- Row 6: Iloilo Agro-Mart Supplies (Past Due Example) -->
<tr class="bg-error-container/10 hover:bg-error-container/20 transition-colors">
<td class="py-space-md px-space-lg">
<div class="flex items-center gap-space-sm">
<div class="w-9 h-9 rounded-lg bg-error-container text-on-error-container flex items-center justify-center font-bold font-headline-sm">
                  IA
                </div>
<div>
<div class="font-label-md text-label-md font-bold text-on-surface">Iloilo Agro-Mart Supplies</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Carlos Magno • Mandurriao</div>
</div>
</div>
</td>
<td class="py-space-md px-space-md">
<div class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-bold">
                Business Pro
              </div>
<div class="font-mono-metric text-[12px] text-on-surface-variant mt-0.5">₱299.00 / mo</div>
</td>
<td class="py-space-md px-space-md text-center">
<span class="font-mono-metric font-semibold text-on-surface">34</span>
<span class="block text-[11px] text-on-surface-variant">Staff Active</span>
</td>
<td class="py-space-md px-space-md">
<span class="font-label-sm text-label-sm text-on-surface">Monthly</span>
<span class="block text-[11px] text-on-surface-variant">Renews 05th</span>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric text-on-surface">05 Sep 2024</div>
<div class="text-[11px] text-error flex items-center gap-0.5">
<span class="material-symbols-outlined text-xs">cancel</span>
                05 Oct Attempt Failed
              </div>
</td>
<td class="py-space-md px-space-md">
<div class="font-mono-metric font-bold text-error">₱299.00</div>
<div class="text-[11px] text-error font-medium">Overdue (4d)</div>
</td>
<td class="py-space-md px-space-md">
<div class="flex items-center gap-1.5">
<span class="px-2 py-0.5 rounded bg-surface-container text-primary font-label-sm text-label-sm font-bold">GCASH</span>
<span class="font-mono-metric text-xs text-on-surface-variant">•0919-450</span>
</div>
</td>
<td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                Past Due
              </span>
</td>
<td class="py-space-md px-space-lg text-right">
<div class="flex items-center justify-end gap-1">
<button class="px-2.5 py-1 rounded-full bg-primary hover:bg-primary-container text-on-primary font-label-sm text-label-sm font-semibold transition-colors flex items-center gap-1" title="Send Reminder" type="button">
<span class="material-symbols-outlined text-xs">send</span>
                  Remind
                </button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Ledger Table Pagination Footer -->
<div class="p-space-md bg-surface-container-low flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm text-on-surface-variant font-label-sm text-label-sm">
<div class="flex items-center gap-space-xs">
<span>Showing 1 to 6 of 412 tenant accounts</span>
<span>•</span>
<span>Displaying October 2024 Settlement Batch</span>
</div>
<div class="flex items-center gap-1">
<button class="w-8 h-8 rounded-full bg-surface-container hover:bg-surface-container-high flex items-center justify-center text-on-surface disabled:opacity-40" disabled="" type="button">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<button class="w-8 h-8 rounded-full bg-primary text-on-primary font-bold flex items-center justify-center" type="button">1</button>
<button class="w-8 h-8 rounded-full hover:bg-surface-container flex items-center justify-center text-on-surface" type="button">2</button>
<button class="w-8 h-8 rounded-full hover:bg-surface-container flex items-center justify-center text-on-surface" type="button">3</button>
<span class="px-1 text-on-surface-variant">...</span>
<button class="w-8 h-8 rounded-full hover:bg-surface-container flex items-center justify-center text-on-surface" type="button">69</button>
<button class="w-8 h-8 rounded-full bg-surface-container hover:bg-surface-container-high flex items-center justify-center text-on-surface" type="button">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</div>
</div>
<!-- Manual Payment Entry Modal Dialog (Interactive overlay) -->
<div class="hidden fixed inset-0 z-50 flex items-center justify-center bg-inverse-surface/40 backdrop-blur-sm p-space-md" id="manualPaymentModal">
<div class="w-full max-w-lg rounded-2xl bg-surface-container-lowest p-space-xl shadow-2xl flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-xl">payments</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Record Manual Tenant Payment</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">For BDO/BPI Over-the-counter or check deposits</p>
</div>
</div>
<button class="w-8 h-8 rounded-full hover:bg-surface-container flex items-center justify-center text-on-surface-variant" onclick="document.getElementById('manualPaymentModal').classList.add('hidden')" type="button">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<div class="flex flex-col gap-space-sm">
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 uppercase tracking-wider">Select Tenant Business</label>
<select class="w-full h-12 px-space-md rounded-lg bg-surface-container-low border-0 outline-none text-on-surface font-body-md text-body-md">
<option>Davao Builders Hardware (Reynaldo Tan)</option>
<option>Iloilo Agro-Mart Supplies (Carlos Magno)</option>
<option>Pampanga Cold Storage Depot (Michelle Santos)</option>
<option>Baguio Creative Print House (Joshua Bagatsing)</option>
</select>
</div>
<div class="grid grid-cols-2 gap-space-sm">
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 uppercase tracking-wider">Amount Paid (PHP ₱)</label>
<input class="w-full h-12 px-space-md rounded-lg bg-surface-container-low border-0 outline-none text-on-surface font-mono-metric font-semibold" type="text" value="₱ 499.00"/>
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 uppercase tracking-wider">Payment Method</label>
<select class="w-full h-12 px-space-md rounded-lg bg-surface-container-low border-0 outline-none text-on-surface font-body-md text-body-md">
<option>BDO Bank OTC Transfer</option>
<option>BPI Express Online OTC</option>
<option>Corporate Check</option>
<option>GCash Direct Offline Receipt</option>
</select>
</div>
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 uppercase tracking-wider">Bank Reference / Deposit Slip Number</label>
<input class="w-full h-12 px-space-md rounded-lg bg-surface-container-low border-0 outline-none text-on-surface font-mono-metric text-body-md" placeholder="e.g. BDO-DEP-994821039" type="text"/>
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 uppercase tracking-wider">Operational Notes</label>
<textarea class="w-full p-space-md rounded-lg bg-surface-container-low border-0 outline-none text-on-surface font-body-sm text-body-sm resize-none" placeholder="Verified by Devon Campbell via branch deposit copy." rows="2"></textarea>
</div>
</div>
<div class="flex items-center justify-end gap-space-sm pt-space-xs">
<button class="px-space-lg py-2.5 rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high font-label-md text-label-md transition-colors" onclick="document.getElementById('manualPaymentModal').classList.add('hidden')" type="button">
          Cancel
        </button>
<button class="px-space-lg py-2.5 rounded-full bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg transition-transform active:scale-[0.98] shadow-md" onclick="alert('Payment receipt registered and invoice cleared!'); document.getElementById('manualPaymentModal').classList.add('hidden')" type="button">
          Confirm &amp; Issue Receipt
        </button>
</div>
</div>
</div>
</div></main>
</div>
<script>
  const activeNavClasses = ['bg-primary-container', 'text-on-primary-container', 'font-semibold', 'rounded-lg', 'shadow-sm'];
  const inactiveNavClasses = ['text-on-surface-variant'];
  document.querySelectorAll('[data-path]').forEach(function (item) {
    if (item.dataset.path === 'dashboard-overview') item.href = "{{ route('super.admin') }}";
    if (item.dataset.path === 'subscription-billing') item.href = "{{ route('super.admin.billing') }}";
    if (item.dataset.path === 'dashboard') item.href = "{{ route('super.admin') }}";
    if (item.dataset.path === 'businesses') item.href = "{{ route('super.admin.businesses') }}";
    if (item.dataset.path === 'subscriptions-billing') item.href = "{{ route('super.admin.billing') }}";
    if (item.dataset.path === 'plans-pricing') item.href = "{{ route('super.admin.plans') }}";
    if (item.dataset.path === 'platform-analytics') item.href = "{{ route('super.admin.analytics') }}";
    if (item.dataset.path === 'customer-activity') item.href = "{{ route('super.admin.activity') }}";
    if (item.dataset.path === 'support-tickets') item.href = "{{ route('super.admin.tickets') }}";
    if (item.dataset.path === 'platform-health') item.href = "{{ route('super.admin.health') }}";
    if (item.dataset.path === 'system-settings') item.href = "{{ route('super.admin.settings') }}";
    const isActive = item.dataset.path === 'subscription-billing' || item.dataset.path === 'subscriptions-billing';
    item.classList.remove(...activeNavClasses, ...inactiveNavClasses);
    item.classList.add(...(isActive ? activeNavClasses : inactiveNavClasses));
    if (isActive) item.setAttribute('aria-current', 'page');
    item.addEventListener('click', function () {
      localStorage.setItem('super-admin-active-path', item.dataset.path);
    });
  });
</script>
<script src="{{ asset('js/super-admin-navigation.js') }}"></script>
</body></html>
