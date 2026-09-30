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
<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-low z-50 flex flex-col justify-between py-space-md shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
<div class="flex flex-col gap-space-md">
<div class="px-space-lg flex items-center gap-space-sm h-12">
<img alt="TimeTrack Super Admin" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1WWP_i-caE0stILPpvuBK9nwR7PlE5Ht13hDuT6URQxi-QCzKMnd3RURJCxzn5YG56n6YUroRES6P6wRwQ4bCdU1MC2x8dVvCndz021dpkNv4dM0Q1MLBztRUhHRNW_FxnqT-QjZJPBQ6b5ueR2BUK40O3RJ_0aM_XqgMngE4MiyHOlAx_xN2StcWnVI9Zk7k5-jZjfsF1XvuGR1oMJy2NLyx3H0v3OwUE4QzzQoVoNatEi1LfndRq4oOAU"/>
<span class="font-headline-sm text-headline-sm text-primary font-bold tracking-tight">TimeTrack</span>
<span class="ml-auto px-space-xs py-0.5 rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm tracking-wider uppercase">OWNER</span>
</div>
<div class="px-space-lg pt-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">SaaS Operations</span>
</div>
<nav class="flex flex-col gap-space-xs px-space-md" data-active-classes="bg-primary-container text-on-primary-container font-bold rounded-lg shadow-sm">
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="dashboard-overview" href="#">Dashboard Overview</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="subscription-billing" href="#">Subscription &amp; Billing</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="platform-analytics" href="#">Platform Analytics</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="customer-activity" href="#">Customer Activity</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="support-tickets" href="#">Support Tickets</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="platform-health" href="#">Platform Health</a>
<a aria-current="page" class="flex items-center px-space-md py-space-sm transition-colors bg-primary-container text-on-primary-container font-bold rounded-lg shadow-sm" data-path="system-settings" href="#">System Settings</a>
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
<main class="relative pt-16 bg-background min-h-screen px-gutter-desktop py-space-lg"><div class="flex flex-col w-full pb-space-xl">
<!-- Top Breadcrumb & Action Header -->
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md mb-space-lg">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-xs font-label-sm text-label-sm text-on-surface-variant">
<span>SaaS Operations</span>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span>Security &amp; Governance</span>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span class="text-primary font-semibold">Super Admin Profile</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Super Admin Profile &amp; Access Credentials</h1>
<p class="font-body-md text-body-md text-on-surface-variant max-w-3xl">
        Manage master root credentials, hardware security keys, Telegram &amp; Viber emergency alerts, and cryptographic session delegation.
      </p>
</div>
<div class="flex items-center gap-space-sm shrink-0">
<button class="h-10 px-space-md rounded-full bg-surface-container-high text-on-surface hover:bg-surface-variant transition-colors font-label-md text-label-md flex items-center gap-space-xs shadow-sm" type="button">
<span class="material-symbols-outlined text-base">history_edu</span>
<span>Audit Access Logs</span>
</button>
<button class="h-10 px-space-lg rounded-full bg-primary hover:bg-primary-container text-on-primary transition-all font-label-md text-label-md flex items-center gap-space-xs shadow-md active:scale-95" type="button">
<span class="material-symbols-outlined text-base">verified</span>
<span>Save Changes</span>
</button>
</div>
</div>
<!-- Hero Profile Banner Card -->
<div class="relative overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm mb-space-lg p-space-lg">
<div class="absolute -right-16 -top-16 w-64 h-64 rounded-full bg-primary-fixed/20 blur-3xl pointer-events-none"></div>
<div class="absolute right-32 bottom-0 w-48 h-48 rounded-full bg-tertiary-fixed/15 blur-2xl pointer-events-none"></div>
<div class="relative z-10 flex flex-col xl:flex-row xl:items-center justify-between gap-space-lg">
<div class="flex flex-col sm:flex-row items-start sm:items-center gap-space-lg">
<div class="relative shrink-0">
<img class="w-24 h-24 rounded-2xl object-cover shadow-md" data-alt="Close up professional editorial headshot of Devon Campbell, an authoritative yet approachable mixed-race male chief technology officer wearing modern minimal dark executive workwear in a high-tech illuminated server control room, cinematic soft lighting with subtle crimson and emerald glow reflections" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwfJkfDxXxYdBIlZdukPyDmJboE87yo9uqQdb4FyCH55JzR-ULlbZzLEGvpR9YOj4LqwTOWZfHKW6bCjiPLokGFGQJR9wMrYT__dreNQIf5tWgY8G8QNO8iG4g7hYqa83W2c7XHP4a-Z-JD4-jm4nWV6U5WE9_HR4ZLMuMq4Gyyv1JNx8o60Bgl-ydYLxcCyZqado3ydQ92s96AGVm9JAqYGRrJzWnvISG9fshWmtMIHWhh37wavUAUA"/>
<span class="absolute -bottom-2 -right-2 px-space-xs py-0.5 rounded-full bg-tertiary text-on-tertiary font-label-sm text-label-sm tracking-wider uppercase flex items-center gap-0.5 shadow-sm">
<span class="material-symbols-outlined text-xs">verified_user</span>
<span>ROOT</span>
</span>
</div>
<div class="flex flex-col gap-space-xs">
<div class="flex flex-wrap items-center gap-space-sm">
<h2 class="font-headline-md text-headline-md text-on-surface">Devon Campbell</h2>
<span class="px-space-sm py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed font-label-sm text-label-sm font-semibold tracking-wide">
              OWNER / SUPER ADMIN
            </span>
<span class="flex items-center gap-1 text-tertiary font-label-sm text-label-sm">
<span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
              Active Master Admin
            </span>
</div>
<div class="font-body-md text-body-md text-on-surface-variant">
            Chief Technology Officer &amp; Platform Owner
          </div>
<div class="flex flex-wrap items-center gap-x-space-md gap-y-1 font-body-sm text-body-sm text-on-surface-variant pt-space-xs">
<span class="flex items-center gap-1 text-on-surface">
<span class="material-symbols-outlined text-sm text-primary">mail</span>
              devon@timetrack.ph
              <span class="text-tertiary font-label-sm text-label-sm font-medium">(Verified Root Key)</span>
</span>
<span class="text-outline-variant">•</span>
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-secondary">phone_iphone</span>
              +63 917 554 2891 (Globe PH)
            </span>
<span class="text-outline-variant">•</span>
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-secondary">dns</span>
              Node: <code class="font-mono-metric text-mono-metric text-on-surface px-1 bg-surface-container rounded">ap-southeast-1</code> (AWS SG)
            </span>
<span class="text-outline-variant">•</span>
<span>Since Nov 2023</span>
</div>
</div>
</div>
<!-- Quick Metrics Strip -->
<div class="grid grid-cols-2 sm:grid-cols-4 gap-space-md bg-surface-container-low/70 p-space-md rounded-xl backdrop-blur-sm shrink-0">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Root Privileges</span>
<span class="font-headline-sm text-headline-sm text-primary mt-1">Tier 0</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Full Infrastructure</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Security Score</span>
<div class="flex items-baseline gap-1 mt-1">
<span class="font-headline-sm text-headline-sm text-tertiary">98%</span>
<span class="material-symbols-outlined text-xs text-tertiary">shield</span>
</div>
<span class="font-body-sm text-body-sm text-tertiary font-medium">Hardened Root</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Active Sessions</span>
<span class="font-headline-sm text-headline-sm text-on-surface mt-1">2 Concurrent</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Devices Paired</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Escalation</span>
<span class="font-headline-sm text-headline-sm text-secondary mt-1">Primary</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">On-Call Tier 1</span>
</div>
</div>
</div>
</div>
<!-- Main Asymmetric 2-Column Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
<!-- Column A: Left Primary Operations (7 of 12 cols / ~60%) -->
<div class="lg:col-span-7 flex flex-col gap-space-lg">
<!-- Section 1: Personal & Organization Details -->
<section class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
<div class="flex items-center justify-between pb-space-md mb-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg">badge</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Personal &amp; Organization Details</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Cryptographic administrative identity mapped to master tenant.</p>
</div>
</div>
<span class="px-space-sm py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
            Immutable Base
          </span>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Legal Full Name</label>
<input class="h-12 px-space-md rounded-lg bg-surface-container-lowest text-on-surface font-body-md text-body-md shadow-sm outline-none focus:bg-surface" type="text" value="Devon Campbell"/>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Job Title / Functional Role</label>
<input class="h-12 px-space-md rounded-lg bg-surface-container-lowest text-on-surface font-body-md text-body-md shadow-sm outline-none focus:bg-surface" type="text" value="Platform Owner / Head of Engineering"/>
</div>
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Primary Root Email</label>
<span class="text-tertiary font-label-sm text-label-sm flex items-center gap-0.5">
<span class="material-symbols-outlined text-xs">check_circle</span> Verified
              </span>
</div>
<input class="h-12 px-space-md rounded-lg bg-surface-container-low text-on-surface-variant font-mono-metric text-mono-metric shadow-sm outline-none cursor-not-allowed" readonly="" type="email" value="devon.campbell@timetrack.ph"/>
</div>
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Backup Recovery Email</label>
<span class="text-primary font-label-sm text-label-sm flex items-center gap-0.5">Air-gapped</span>
</div>
<input class="h-12 px-space-md rounded-lg bg-surface-container-lowest text-on-surface font-mono-metric text-mono-metric shadow-sm outline-none focus:bg-surface" type="email" value="security-recovery@timetrack.ph"/>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Timezone &amp; Regulatory Locale</label>
<div class="relative">
<select class="w-full h-12 px-space-md rounded-lg bg-surface-container-lowest text-on-surface font-body-md text-body-md shadow-sm outline-none appearance-none pr-10">
<option selected="">UTC+08:00 (Asia/Manila - Philippine Standard Time)</option>
<option>UTC+08:00 (Asia/Singapore - SGT)</option>
<option>UTC+07:00 (Asia/Bangkok - ICT)</option>
<option>UTC+00:00 (UTC Universal Standard)</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-3.5 pointer-events-none text-on-surface-variant">expand_more</span>
</div>
</div>
<div class="flex flex-col gap-1">
<label class="font-label-sm text-label-sm text-on-surface-variant uppercase">Language &amp; Dialect Preference</label>
<div class="relative">
<select class="w-full h-12 px-space-md rounded-lg bg-surface-container-lowest text-on-surface font-body-md text-body-md shadow-sm outline-none appearance-none pr-10">
<option selected="">English &amp; Tagalog (Filipino Enterprise Standard)</option>
<option>English (US Technical Standard)</option>
<option>English &amp; Cebuano</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-3.5 pointer-events-none text-on-surface-variant">expand_more</span>
</div>
</div>
<div class="sm:col-span-2 flex flex-col sm:flex-row items-center justify-between p-space-md bg-surface-container-low rounded-xl gap-space-md">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-primary font-mono-metric text-mono-metric font-bold">
                #01
              </div>
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Admin SSH &amp; API Alias</span>
<div class="font-mono-metric text-mono-metric text-on-surface font-bold">devon-root-01@aws-sg-prod</div>
</div>
</div>
<button class="h-9 px-space-md rounded-full bg-surface-container-lowest hover:bg-surface text-on-surface font-label-sm text-label-sm shadow-sm transition-colors flex items-center gap-1" type="button">
<span class="material-symbols-outlined text-sm">content_copy</span> Copy Fingerprint
            </button>
</div>
</div>
</section>
<!-- Section 2: Multi-Factor Authentication & Cryptographic Keys (Hardware Security) -->
<section class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
<div class="flex items-center justify-between pb-space-md mb-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-8 h-8 rounded-lg bg-tertiary-fixed/40 flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-lg">vpn_key</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Multi-Factor Authentication &amp; Hardware Keys</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">FIDO2 WebAuthn cryptographic hardware tokens enforced at root level.</p>
</div>
</div>
<span class="px-space-sm py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-xs">lock</span> 100% Enforced
          </span>
</div>
<div class="flex flex-col gap-space-md">
<!-- Item 1: YubiKey Hardware Token -->
<div class="p-space-md rounded-xl bg-surface-container-low flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<div class="flex items-start gap-space-md">
<div class="w-12 h-12 rounded-xl bg-surface-container-lowest flex items-center justify-center text-primary shadow-sm shrink-0">
<span class="material-symbols-outlined text-2xl">usb</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-space-xs">
<span class="font-label-lg text-label-lg text-on-surface">Hardware FIDO2 Security Key</span>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary text-on-tertiary font-label-sm text-label-sm">Primary</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                  YubiKey 5C NFC (Serial: #8841-9921-YB) • Registered Nov 12, 2023 (3 mos ago)
                </span>
<span class="font-mono-metric text-mono-metric text-tertiary text-xs mt-1">
                  SHA-256: e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855
                </span>
</div>
</div>
<div class="flex items-center gap-space-xs shrink-0 self-end md:self-center">
<button class="h-9 px-space-md rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-label-sm text-label-sm shadow-sm flex items-center gap-1" type="button">
<span class="material-symbols-outlined text-sm">sensors</span> Test Key
              </button>
<button class="h-9 px-space-sm rounded-full bg-surface-container-high text-error hover:bg-error-container hover:text-on-error-container transition-colors font-label-sm text-label-sm flex items-center" type="button">
<span class="material-symbols-outlined text-sm">remove_circle_outline</span>
</button>
</div>
</div>
<!-- Item 2: TOTP App -->
<div class="p-space-md rounded-xl bg-surface-container-low flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<div class="flex items-start gap-space-md">
<div class="w-12 h-12 rounded-xl bg-surface-container-lowest flex items-center justify-center text-secondary shadow-sm shrink-0">
<span class="material-symbols-outlined text-2xl">password</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-space-xs">
<span class="font-label-lg text-label-lg text-on-surface">Time-based One-Time Password (TOTP)</span>
<span class="px-space-xs py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm">Active</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                  1Password &amp; Google Authenticator RFC 6238 • 30-second rolling interval
                </span>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                  Enforced on all SaaS configuration mutation and tenant payload exports.
                </span>
</div>
</div>
<div class="shrink-0 self-end md:self-center">
<button class="h-9 px-space-md rounded-full bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-label-sm text-label-sm shadow-sm flex items-center gap-1" type="button">
<span class="material-symbols-outlined text-sm">qr_code_2</span> Regenerate QR
              </button>
</div>
</div>
<!-- Item 3: Backup Master Codes & Break-Glass -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<div class="p-space-md rounded-xl bg-surface-container-low flex flex-col justify-between gap-space-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs text-on-surface font-label-md text-label-md">
<span class="material-symbols-outlined text-base text-primary">pin</span>
                  Emergency Backup Codes
                </div>
<span class="px-space-xs py-0.5 rounded bg-surface-container font-mono-metric text-mono-metric text-xs text-on-surface font-bold">
                  8 / 10 Left
                </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Single-use emergency bypass codes stored in physical corporate safe vault.
              </p>
<div class="flex items-center gap-space-sm pt-space-xs">
<button class="h-8 px-space-md rounded-full bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface shadow-sm flex items-center gap-1" type="button">
<span class="material-symbols-outlined text-sm">download</span> Download PDF
                </button>
<button class="h-8 px-space-sm rounded-full text-primary hover:bg-surface-container font-label-sm text-label-sm" type="button">
                  View Remaining
                </button>
</div>
</div>
<div class="p-space-md rounded-xl bg-surface-container-low flex flex-col justify-between gap-space-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs text-on-surface font-label-md text-label-md">
<span class="material-symbols-outlined text-base text-secondary">encrypted</span>
                  Root Break-Glass Password
                </div>
<span class="px-space-xs py-0.5 rounded bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm">
                  Valid
                </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Last rotated 14 days ago. Automatic platform expiry policy triggers in <strong>76 days</strong>.
              </p>
<div class="flex items-center justify-between pt-space-xs">
<span class="font-mono-metric text-mono-metric text-xs text-on-surface-variant">PBE: Argon2id v13</span>
<button class="h-8 px-space-md rounded-full bg-primary-container text-on-primary-container font-label-sm text-label-sm hover:bg-primary hover:text-on-primary transition-colors shadow-sm" type="button">
                  Rotate Now
                </button>
</div>
</div>
</div>
</div>
</section>
<!-- Section 3: Connected Emergency Broadcasts & Telemetry Alerts -->
<section class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
<div class="flex items-center justify-between pb-space-md mb-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg">crisis_alert</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Emergency Broadcasts &amp; Telemetry Alerts</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Immediate off-band incident dispatch for multi-tenant failures.</p>
</div>
</div>
<span class="text-tertiary font-label-sm text-label-sm flex items-center gap-1 font-semibold">
<span class="w-2 h-2 rounded-full bg-tertiary"></span> 3 Channels Linked
          </span>
</div>
<div class="flex flex-col gap-space-sm">
<!-- Telegram Ops Bot -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between p-space-md rounded-xl bg-surface-container-low gap-space-sm">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-xl bg-[#229ED9]/15 text-[#0088cc] flex items-center justify-center font-bold text-lg shrink-0">
<span class="material-symbols-outlined">send</span>
</div>
<div>
<div class="flex items-center gap-space-xs">
<span class="font-label-md text-label-md text-on-surface">Telegram Ops Bot: @TimeTrackAlerts_Bot</span>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm">Active</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">
                  Linked Chat ID: <code class="font-mono-metric text-mono-metric text-on-surface">#98421048</code> • P1 Sev-0 Outages, DB Deadlocks, Biometric Cloud API fails.
                </div>
</div>
</div>
<div class="flex items-center gap-space-xs self-end sm:self-center shrink-0">
<button class="h-8 px-space-md rounded-full bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface shadow-sm" type="button">
                Ping Test
              </button>
</div>
</div>
<!-- Viber Business Notifications -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between p-space-md rounded-xl bg-surface-container-low gap-space-sm">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-xl bg-[#7360F2]/15 text-[#7360F2] flex items-center justify-center font-bold text-lg shrink-0">
<span class="material-symbols-outlined">chat</span>
</div>
<div>
<div class="flex items-center gap-space-xs">
<span class="font-label-md text-label-md text-on-surface">Viber Business Notifications</span>
<span class="px-space-xs py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm">Connected</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">
                  Receiver: <span class="font-mono-metric text-mono-metric text-on-surface">+63 917 554 2891</span> • Daily ARR digest, High-tier dunning &amp; GCash Gateway warnings.
                </div>
</div>
</div>
<div class="flex items-center gap-space-xs self-end sm:self-center shrink-0">
<button class="h-8 px-space-md rounded-full bg-surface-container-lowest text-on-surface font-label-sm text-label-sm hover:bg-surface shadow-sm" type="button">
                Config
              </button>
</div>
</div>
<!-- SMS Carrier Gateway -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between p-space-md rounded-xl bg-surface-container-low gap-space-sm">
<div class="flex items-center gap-space-md">
<div class="w-10 h-10 rounded-xl bg-primary-fixed text-primary flex items-center justify-center font-bold text-lg shrink-0">
<span class="material-symbols-outlined">cell_tower</span>
</div>
<div>
<div class="flex items-center gap-space-xs">
<span class="font-label-md text-label-md text-on-surface">SMS Carrier Fallback (Semaphore PH)</span>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant font-label-sm text-label-sm">Operational</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">
                  Prioritized delivery when internet uplink drops below 10kbps.
                </div>
</div>
</div>
<div class="flex items-center gap-space-xs self-end sm:self-center shrink-0">
<span class="font-mono-metric text-mono-metric text-xs text-on-surface-variant">Balance: ₱4,190.00</span>
</div>
</div>
</div>
</section>
</div>
<!-- Column B: Right Utility, Security Hardening & Audit (5 of 12 cols / ~40%) -->
<div class="lg:col-span-5 flex flex-col gap-space-lg">
<!-- Active Sessions & Device Authorization -->
<section class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
<div class="flex items-center justify-between pb-space-md mb-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg">devices</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Authorized Sessions</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">2 cryptographically signed keys active.</p>
</div>
</div>
<button class="text-error hover:underline font-label-sm text-label-sm font-semibold" type="button">
            Kill All
          </button>
</div>
<div class="flex flex-col gap-space-md">
<!-- Session 1: Current Desktop -->
<div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-xs relative overflow-hidden">
<div class="flex items-start justify-between">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-2xl text-primary">laptop_mac</span>
<div>
<div class="flex items-center gap-space-xs">
<span class="font-label-md text-label-md text-on-surface">MacBook Pro 16" (Sonoma 14.5)</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Chrome 129.0 • BGC, Taguig, Philippines</span>
</div>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary text-on-tertiary font-label-sm text-label-sm font-medium">
                This Device
              </span>
</div>
<div class="flex items-center justify-between pt-space-xs font-mono-metric text-mono-metric text-xs text-on-surface-variant">
<span>IP: 112.198.84.21 (PLDT Fiber)</span>
<span class="text-tertiary flex items-center gap-0.5 font-semibold">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary animate-ping"></span> Active Now
              </span>
</div>
</div>
<!-- Session 2: Mobile Admin App -->
<div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
<div class="flex items-start justify-between">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-2xl text-secondary">phone_iphone</span>
<div>
<div class="flex items-center gap-space-xs">
<span class="font-label-md text-label-md text-on-surface">iPhone 15 Pro Max</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">TimeTrack Mobile SuperApp v4.18.2</span>
</div>
</div>
<button class="h-7 px-space-sm rounded-full bg-surface-container-high text-error hover:bg-error-container hover:text-on-error-container font-label-sm text-label-sm transition-colors" type="button">
                Revoke
              </button>
</div>
<div class="flex items-center justify-between pt-space-xs font-mono-metric text-mono-metric text-xs text-on-surface-variant">
<span>IP: 180.191.132.55 (Ortigas, Pasig)</span>
<span>12 mins ago</span>
</div>
</div>
</div>
<button class="w-full mt-space-md h-11 rounded-lg bg-surface-container hover:bg-surface-container-high text-error font-label-md text-label-md flex items-center justify-center gap-space-xs transition-colors shadow-sm" type="button">
<span class="material-symbols-outlined text-base">logout</span>
<span>Revoke All Other Sessions (Force Re-auth)</span>
</button>
</section>
<!-- Recent Super Admin Audit Activity Log (Last 24h) -->
<section class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
<div class="flex items-center justify-between pb-space-md mb-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg">manage_search</span>
</div>
<div>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Root Audit Log</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Last 24-hour cryptographic events.</p>
</div>
</div>
<span class="font-mono-metric text-mono-metric text-xs text-tertiary font-bold">MUTABLE: FALSE</span>
</div>
<div class="relative flex flex-col gap-space-md pl-4 before:absolute before:left-1.5 before:top-2 before:bottom-2 before:w-0.5 before:bg-surface-container">
<!-- Audit 1 -->
<div class="relative flex flex-col gap-0.5">
<div class="absolute -left-[19px] top-1.5 w-2.5 h-2.5 rounded-full bg-tertiary"></div>
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-semibold">Rotated GCash Direct Webhook Secret</span>
<span class="font-mono-metric text-mono-metric text-xs text-on-surface-variant">14:38 PHT</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">
              Origin: 112.198.84.21 • Secret HMAC-SHA256 verified successfully.
            </span>
</div>
<!-- Audit 2 -->
<div class="relative flex flex-col gap-0.5">
<div class="absolute -left-[19px] top-1.5 w-2.5 h-2.5 rounded-full bg-tertiary"></div>
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-semibold">Triggered Manual DB Snapshot</span>
<span class="font-mono-metric text-mono-metric text-xs text-on-surface-variant">11:20 PHT</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">
              AWS S3 ap-southeast-1 • 482GB compressed multi-tenant dump saved.
            </span>
</div>
<!-- Audit 3 -->
<div class="relative flex flex-col gap-0.5">
<div class="absolute -left-[19px] top-1.5 w-2.5 h-2.5 rounded-full bg-tertiary"></div>
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-semibold">Approved Custom Geofence Override</span>
<span class="font-mono-metric text-mono-metric text-xs text-on-surface-variant">09:05 PHT</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">
              Client: Metro Logistics Corp (+/- 150m Port Area Expansion).
            </span>
</div>
<!-- Audit 4 -->
<div class="relative flex flex-col gap-0.5">
<div class="absolute -left-[19px] top-1.5 w-2.5 h-2.5 rounded-full bg-outline"></div>
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface font-semibold">Exported DOLE Compliance Ledger</span>
<span class="font-mono-metric text-mono-metric text-xs text-on-surface-variant">Yesterday</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">
              Encrypted Audit ZIP package issued for Department of Labor verification.
            </span>
</div>
</div>
<div class="mt-space-md pt-space-sm flex justify-center">
<a class="font-label-md text-label-md text-primary hover:text-primary-container flex items-center gap-1 font-semibold transition-colors" href="#">
            View All 1,492 Audit Events
            <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
</section>
<!-- Dangerous / Platform Handover Zone -->
<section class="bg-surface-container-low rounded-xl p-space-lg shadow-sm">
<div class="flex items-center gap-space-sm mb-space-sm text-error">
<span class="material-symbols-outlined text-xl">gavel</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface">Platform Sovereignty &amp; Root Handover</h3>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
          High-consequence infrastructure commands. Execution requires physical FIDO2 touch confirm and 4-eye dual-authorization.
        </p>
<div class="flex flex-col gap-space-sm">
<!-- Action 1: Lockout Protocol -->
<div class="p-space-md rounded-lg bg-surface-container-lowest flex items-center justify-between gap-space-sm shadow-sm">
<div>
<div class="font-label-md text-label-md text-on-surface font-bold">Emergency Platform Lockout</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Restrict all non-root admin logins across 2,400+ tenants immediately.</div>
</div>
<button class="h-9 px-space-md rounded-full bg-error-container text-on-error-container hover:bg-error hover:text-on-error font-label-sm text-label-sm shrink-0 transition-colors" type="button">
              Engage Lockout
            </button>
</div>
<!-- Action 2: Transfer Ownership -->
<div class="p-space-md rounded-lg bg-surface-container-lowest flex items-center justify-between gap-space-sm shadow-sm">
<div>
<div class="font-label-md text-label-md text-on-surface font-bold">Transfer SaaS Ownership</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Hand over master AWS root DNS, stripe keys, and subscription ledger.</div>
</div>
<button class="h-9 px-space-md rounded-full bg-surface-container text-on-surface-variant hover:bg-surface-container-high font-label-sm text-label-sm shrink-0 transition-colors" type="button">
              Initiate Handover
            </button>
</div>
</div>
</section>
</div>
</div>
</div></main>
</div>
<script src="{{ asset('js/super-admin-navigation.js') }}"></script>
</body></html>
