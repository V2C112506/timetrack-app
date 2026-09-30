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
<a aria-current="page" class="flex items-center px-space-md py-space-sm transition-colors bg-primary-container text-on-primary-container font-bold rounded-lg shadow-sm" data-path="customer-activity" href="#">Customer Activity</a>
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
<main class="relative pt-16 bg-background min-h-screen px-gutter-desktop py-space-lg"><div class="flex flex-col w-full gap-space-lg">
<div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
<div class="flex flex-col">
<div class="flex items-center gap-space-sm mb-1">
<span class="font-label-sm text-label-sm text-primary uppercase tracking-wider font-semibold">Tenant Telemetry &amp; Audit</span>
<span class="w-1.5 h-1.5 rounded-full bg-outline-variant"></span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Real-Time Core Stream</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">Customer Activity &amp; Live Event Stream</h1>
</div>
<div class="flex flex-wrap items-center gap-space-sm">
<div class="flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-surface-container shadow-sm">
<span class="relative flex h-2.5 w-2.5">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-tertiary-fixed opacity-75"></span>
<span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-tertiary"></span>
</span>
<span class="font-label-md text-label-md text-on-surface font-medium">Live Stream Active</span>
<button class="ml-1 text-on-surface-variant hover:text-primary transition-colors text-xs font-semibold focus:outline-none" id="toggle-stream-btn" onclick="toggleStream(this)">PAUSE</button>
</div>
<button class="flex items-center gap-space-xs px-space-md py-2 rounded-lg bg-surface-container-high text-on-surface hover:bg-surface-variant transition-colors font-label-md text-label-md">
<span class="material-symbols-outlined text-base">file_download</span>
        Export Audit Log
      </button>
<button class="flex items-center gap-space-xs px-space-md py-2 rounded-lg bg-primary text-on-primary hover:bg-primary-container shadow-sm transition-all font-label-md text-label-md font-semibold">
<span class="material-symbols-outlined text-base">refresh</span>
        Force Poll
      </button>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-space-md">
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow relative overflow-hidden">
<div class="absolute -right-4 -bottom-4 w-24 h-24 bg-primary/5 rounded-full blur-xl pointer-events-none"></div>
<div class="flex items-start justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase font-semibold">Active Tenant Sessions</span>
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-lg">corporate_fare</span>
</div>
</div>
<div class="mt-space-md">
<div class="font-headline-lg text-headline-lg font-bold text-on-surface tracking-tight">384</div>
<div class="flex items-center gap-space-xs mt-1 text-tertiary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span>+14.2% peak concurrency</span>
</div>
</div>
<div class="mt-space-sm pt-space-xs font-label-sm text-label-sm text-on-surface-variant">
        Across 512 registered multi-tenant hubs
      </div>
</div>
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow relative overflow-hidden">
<div class="absolute -right-4 -bottom-4 w-24 h-24 bg-tertiary/5 rounded-full blur-xl pointer-events-none"></div>
<div class="flex items-start justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase font-semibold">Punch Events / Min</span>
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-tertiary">
<span class="material-symbols-outlined text-lg">fingerprint</span>
</div>
</div>
<div class="mt-space-md">
<div class="flex items-baseline gap-space-xs">
<span class="font-headline-lg text-headline-lg font-bold text-on-surface tracking-tight">184</span>
<span class="font-label-md text-label-md text-on-surface-variant">punches/min</span>
</div>
<div class="flex items-center gap-space-xs mt-1 text-tertiary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">speed</span>
<span>Peak load optimal (p99: 42ms)</span>
</div>
</div>
<div class="mt-space-sm pt-space-xs font-label-sm text-label-sm text-on-surface-variant">
        Face-match biometrics + GPS lock
      </div>
</div>
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow relative overflow-hidden">
<div class="absolute -right-4 -bottom-4 w-24 h-24 bg-secondary/5 rounded-full blur-xl pointer-events-none"></div>
<div class="flex items-start justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase font-semibold">Config Updates Today</span>
<div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-lg">tune</span>
</div>
</div>
<div class="mt-space-md">
<div class="font-headline-lg text-headline-lg font-bold text-on-surface tracking-tight">64</div>
<div class="flex items-center gap-space-xs mt-1 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">history</span>
<span>28 geofences, 36 shift schedules</span>
</div>
</div>
<div class="mt-space-sm pt-space-xs font-label-sm text-label-sm text-on-surface-variant">
        Zero breaking schema modifications
      </div>
</div>
<div class="p-space-md rounded-xl bg-error-container text-on-error-container shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow relative overflow-hidden">
<div class="flex items-start justify-between">
<span class="font-label-sm text-label-sm uppercase font-bold tracking-wide">Security Anomalies</span>
<div class="w-8 h-8 rounded-lg bg-error text-on-error flex items-center justify-center animate-pulse">
<span class="material-symbols-outlined text-lg">shield_with_heart</span>
</div>
</div>
<div class="mt-space-md">
<div class="font-headline-lg text-headline-lg font-bold tracking-tight">2 Events</div>
<div class="flex items-center gap-space-xs mt-1 text-error font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-sm">warning</span>
<span>Multi-device simultaneous login</span>
</div>
</div>
<div class="mt-space-sm pt-space-xs font-label-sm text-label-sm font-medium">
        Automatic temporary token revoke armed
      </div>
</div>
</div>
<div class="grid grid-cols-1 xl:grid-cols-4 gap-space-md">
<div class="xl:col-span-3 flex flex-col gap-space-md">
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-md">
<div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-xs bg-surface-container-low px-space-md py-2 rounded-lg flex-1 max-w-md">
<span class="material-symbols-outlined text-base text-on-surface-variant">search</span>
<input class="w-full bg-transparent border-0 outline-none text-on-surface font-body-sm text-body-sm placeholder:text-on-surface-variant" id="stream-search" onkeyup="filterLedger()" placeholder="Search by business, email, IP, or action..." type="text"/>
</div>
<div class="flex items-center gap-space-xs overflow-x-auto pb-1 md:pb-0">
<button class="filter-chip px-space-md py-1.5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-semibold whitespace-nowrap shadow-sm" onclick="setCategory(this, 'all')">All Events</button>
<button class="filter-chip px-space-md py-1.5 rounded-full bg-surface-container text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-label-sm text-label-sm font-medium whitespace-nowrap transition-colors" onclick="setCategory(this, 'security')">Auth &amp; Security</button>
<button class="filter-chip px-space-md py-1.5 rounded-full bg-surface-container text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-label-sm text-label-sm font-medium whitespace-nowrap transition-colors" onclick="setCategory(this, 'subscription')">Subscription</button>
<button class="filter-chip px-space-md py-1.5 rounded-full bg-surface-container text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-label-sm text-label-sm font-medium whitespace-nowrap transition-colors" onclick="setCategory(this, 'workforce')">Workforce Scaling</button>
<button class="filter-chip px-space-md py-1.5 rounded-full bg-surface-container text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-label-sm text-label-sm font-medium whitespace-nowrap transition-colors" onclick="setCategory(this, 'geofence')">Geofence Config</button>
<button class="filter-chip px-space-md py-1.5 rounded-full bg-surface-container text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface font-label-sm text-label-sm font-medium whitespace-nowrap transition-colors" onclick="setCategory(this, 'export')">DTR Export</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left" id="audit-table">
<thead>
<tr class="bg-surface-container-low font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
<th class="py-space-sm px-space-md rounded-l-lg">Time</th>
<th class="py-space-sm px-space-md">Tenant &amp; Actor</th>
<th class="py-space-sm px-space-md">Category</th>
<th class="py-space-sm px-space-md">Action Details</th>
<th class="py-space-sm px-space-md">Origin IP &amp; Node</th>
<th class="py-space-sm px-space-md">Status</th>
<th class="py-space-sm px-space-md text-right rounded-r-lg">Manage</th>
</tr>
</thead>
<tbody class="divide-y-0" id="stream-rows">
<tr class="ledger-row hover:bg-surface-container transition-colors group" data-category="workforce">
<td class="py-space-md px-space-md align-middle">
<div class="flex items-center gap-1.5">
<span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
<span class="font-mono-metric text-mono-metric text-on-surface font-semibold">Just now</span>
</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">14:38:12 PHT</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md font-bold text-on-surface">Kape't Milktea Hub QC</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">g.torres@kapemilktea.ph</div>
<div class="font-label-sm text-label-sm text-primary">Tenant Org Admin</div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-space-sm py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">Workforce</span>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md text-on-surface font-medium">Registered 4 new mobile punch seats</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Plan tier capacity: Business Pro ₱299/mo per seat</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-mono-metric text-mono-metric text-on-surface">112.198.84.21</div>
<div class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-on-surface-variant">location_on</span>
                    Quezon City, PH
                  </div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold flex items-center gap-1 w-fit">
<span class="material-symbols-outlined text-xs">check_circle</span>
                    Success
                  </span>
</td>
<td class="py-space-md px-space-md align-middle text-right">
<button class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-variant text-on-surface-variant hover:text-on-surface inline-flex items-center justify-center transition-colors" title="Inspect Payload">
<span class="material-symbols-outlined text-sm">data_object</span>
</button>
</td>
</tr>
<tr class="ledger-row hover:bg-surface-container transition-colors group" data-category="geofence">
<td class="py-space-md px-space-md align-middle">
<span class="font-mono-metric text-mono-metric text-on-surface font-semibold">2m ago</span>
<div class="font-body-sm text-body-sm text-on-surface-variant">14:36:04 PHT</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md font-bold text-on-surface">Metro Logistics Hub Manila</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">dispatch.lead@metrologistics.com</div>
<div class="font-label-sm text-label-sm text-secondary">Operations Manager</div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-space-sm py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">Geofence Config</span>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md text-on-surface font-medium">Perimeter expanded (+50m buffer)</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">North Harbor Gate 4 Pier Zone (Lat: 14.5995)</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-mono-metric text-mono-metric text-on-surface">180.191.132.55</div>
<div class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-on-surface-variant">location_on</span>
                    Manila, PH
                  </div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold flex items-center gap-1 w-fit">
<span class="material-symbols-outlined text-xs">check_circle</span>
                    Success
                  </span>
</td>
<td class="py-space-md px-space-md align-middle text-right">
<button class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-variant text-on-surface-variant hover:text-on-surface inline-flex items-center justify-center transition-colors" title="Inspect Payload">
<span class="material-symbols-outlined text-sm">data_object</span>
</button>
</td>
</tr>
<tr class="ledger-row hover:bg-surface-container transition-colors group" data-category="export">
<td class="py-space-md px-space-md align-middle">
<span class="font-mono-metric text-mono-metric text-on-surface font-semibold">5m ago</span>
<div class="font-body-sm text-body-sm text-on-surface-variant">14:33:18 PHT</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md font-bold text-on-surface">Davao Builders Hardware</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">payroll@davaobuilders.ph</div>
<div class="font-label-sm text-label-sm text-primary">Payroll Officer</div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-space-sm py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">DTR Export</span>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md text-on-surface font-medium">Batch exported encrypted DTR records</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">142 verified employee timesheets (CSV &amp; PDF)</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-mono-metric text-mono-metric text-on-surface">49.145.201.8</div>
<div class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-on-surface-variant">location_on</span>
                    Davao City, PH
                  </div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold flex items-center gap-1 w-fit">
<span class="material-symbols-outlined text-xs">check_circle</span>
                    Success
                  </span>
</td>
<td class="py-space-md px-space-md align-middle text-right">
<button class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-variant text-on-surface-variant hover:text-on-surface inline-flex items-center justify-center transition-colors" title="Inspect Payload">
<span class="material-symbols-outlined text-sm">data_object</span>
</button>
</td>
</tr>
<tr class="ledger-row hover:bg-surface-container transition-colors group bg-error-container/20" data-category="security">
<td class="py-space-md px-space-md align-middle">
<span class="font-mono-metric text-mono-metric text-error font-semibold">9m ago</span>
<div class="font-body-sm text-body-sm text-on-surface-variant">14:29:45 PHT</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md font-bold text-on-surface">Iloilo Distribution Depot</div>
<div class="font-body-sm text-body-sm text-error font-medium">root.admin@iloilodepot.ph</div>
<div class="font-label-sm text-label-sm text-error">Locked Tenant Key</div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-space-sm py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-bold">Auth &amp; Security</span>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md text-error font-semibold">Failed master login (5 successive attempts)</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Threshold trigger: IP banned for 60 minutes</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-mono-metric text-mono-metric text-error font-semibold">203.177.61.19</div>
<div class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-on-surface-variant">location_on</span>
                    Iloilo City, PH
                  </div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-2.5 py-1 rounded-full bg-error text-on-error font-label-sm text-label-sm font-semibold flex items-center gap-1 w-fit">
<span class="material-symbols-outlined text-xs">block</span>
                    Blocked
                  </span>
</td>
<td class="py-space-md px-space-md align-middle text-right">
<button class="px-2.5 py-1 rounded-md bg-error text-on-error hover:bg-on-error-container text-xs font-semibold transition-colors">
                    Unban IP
                  </button>
</td>
</tr>
<tr class="ledger-row hover:bg-surface-container transition-colors group" data-category="security">
<td class="py-space-md px-space-md align-middle">
<span class="font-mono-metric text-mono-metric text-on-surface font-semibold">14m ago</span>
<div class="font-body-sm text-body-sm text-on-surface-variant">14:24:02 PHT</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md font-bold text-on-surface">QuickBite Fastfood BGC</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">store04.mgr@quickbitebgc.com</div>
<div class="font-label-sm text-label-sm text-primary">Shift Supervisor</div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-space-sm py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">Auth &amp; Security</span>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md text-on-surface font-medium">Requested 2FA Hardware Token Reset</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Triggered OTP recovery sent to verified director mobile</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-mono-metric text-mono-metric text-on-surface">120.28.188.94</div>
<div class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-on-surface-variant">location_on</span>
                    Taguig, BGC, PH
                  </div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-2.5 py-1 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold flex items-center gap-1 w-fit">
<span class="material-symbols-outlined text-xs text-secondary">pending</span>
                    Action Req
                  </span>
</td>
<td class="py-space-md px-space-md align-middle text-right">
<button class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-variant text-on-surface-variant hover:text-on-surface inline-flex items-center justify-center transition-colors" title="Review Auth Ticket">
<span class="material-symbols-outlined text-sm">vpn_key</span>
</button>
</td>
</tr>
<tr class="ledger-row hover:bg-surface-container transition-colors group" data-category="subscription">
<td class="py-space-md px-space-md align-middle">
<span class="font-mono-metric text-mono-metric text-on-surface font-semibold">21m ago</span>
<div class="font-body-sm text-body-sm text-on-surface-variant">14:17:33 PHT</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md font-bold text-on-surface">Cebu Fresh Supermart</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">cfo@cebufresh.com.ph</div>
<div class="font-label-sm text-label-sm text-primary">Billing Admin</div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-space-sm py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">Subscription</span>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-label-md text-label-md text-on-surface font-medium">Upgraded subscription tier to Enterprise ₱499</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Unlocked unlimited biometric validation + API webhooks</div>
</td>
<td class="py-space-md px-space-md align-middle">
<div class="font-mono-metric text-mono-metric text-on-surface">122.54.19.141</div>
<div class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-on-surface-variant">location_on</span>
                    Cebu City, PH
                  </div>
</td>
<td class="py-space-md px-space-md align-middle">
<span class="px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold flex items-center gap-1 w-fit">
<span class="material-symbols-outlined text-xs">verified</span>
                    Success
                  </span>
</td>
<td class="py-space-md px-space-md align-middle text-right">
<button class="w-8 h-8 rounded-lg bg-surface-container-high hover:bg-surface-variant text-on-surface-variant hover:text-on-surface inline-flex items-center justify-center transition-colors" title="Invoice Summary">
<span class="material-symbols-outlined text-sm">receipt_long</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm pt-space-xs font-label-sm text-label-sm text-on-surface-variant">
<div>Showing <span class="font-bold text-on-surface">6</span> of <span class="font-bold text-on-surface">1,492</span> events logged in last 24h</div>
<div class="flex items-center gap-space-xs">
<button class="px-3 py-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-semibold transition-colors disabled:opacity-50" disabled="">Previous</button>
<span class="px-2 text-on-surface font-bold">1</span>
<button class="px-3 py-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-semibold transition-colors">Next</button>
</div>
</div>
</div>
</div>
<div class="xl:col-span-1 flex flex-col gap-space-md">
<div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<div class="flex flex-col">
<h2 class="font-headline-sm text-headline-sm font-bold text-on-surface">Active Businesses</h2>
<span class="font-body-sm text-body-sm text-on-surface-variant">Ranked by Daily Punch Volume</span>
</div>
<span class="material-symbols-outlined text-primary text-xl">analytics</span>
</div>
<div class="flex flex-col gap-space-sm">
<div class="p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors flex flex-col gap-1">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md font-bold text-on-surface truncate">Metro Logistics Hub</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold">Enterprise</span>
</div>
<div class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
<span>Punch volume today</span>
<span class="font-mono-metric text-mono-metric font-semibold text-on-surface">3,480 punches</span>
</div>
<div class="w-full bg-surface-container-highest rounded-full h-1.5 mt-1 overflow-hidden">
<div class="bg-primary h-1.5 rounded-full" style="width: 88%"></div>
</div>
<div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant mt-0.5">
<span>94 active mobile licenses</span>
<span class="text-tertiary font-medium">99.8% Geo-match</span>
</div>
</div>
<div class="p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors flex flex-col gap-1">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md font-bold text-on-surface truncate">Cebu Fresh Supermart</span>
<span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">Pro Tier</span>
</div>
<div class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
<span>Punch volume today</span>
<span class="font-mono-metric text-mono-metric font-semibold text-on-surface">2,110 punches</span>
</div>
<div class="w-full bg-surface-container-highest rounded-full h-1.5 mt-1 overflow-hidden">
<div class="bg-primary h-1.5 rounded-full" style="width: 64%"></div>
</div>
<div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant mt-0.5">
<span>62 active mobile licenses</span>
<span class="text-tertiary font-medium">98.4% Geo-match</span>
</div>
</div>
<div class="p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors flex flex-col gap-1">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md font-bold text-on-surface truncate">Davao Builders Hardware</span>
<span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold">Pro Tier</span>
</div>
<div class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
<span>Punch volume today</span>
<span class="font-mono-metric text-mono-metric font-semibold text-on-surface">1,840 punches</span>
</div>
<div class="w-full bg-surface-container-highest rounded-full h-1.5 mt-1 overflow-hidden">
<div class="bg-primary h-1.5 rounded-full" style="width: 52%"></div>
</div>
<div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant mt-0.5">
<span>55 active mobile licenses</span>
<span class="text-tertiary font-medium">100% Geo-match</span>
</div>
</div>
<div class="p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors flex flex-col gap-1">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md font-bold text-on-surface truncate">QuickBite Fastfood BGC</span>
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold">Standard</span>
</div>
<div class="flex items-center justify-between text-on-surface-variant font-body-sm text-body-sm">
<span>Punch volume today</span>
<span class="font-mono-metric text-mono-metric font-semibold text-on-surface">920 punches</span>
</div>
<div class="w-full bg-surface-container-highest rounded-full h-1.5 mt-1 overflow-hidden">
<div class="bg-primary h-1.5 rounded-full" style="width: 32%"></div>
</div>
<div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant mt-0.5">
<span>28 active mobile licenses</span>
<span class="text-tertiary font-medium">97.1% Geo-match</span>
</div>
</div>
</div>
<div class="p-space-md rounded-xl bg-surface-container flex flex-col gap-space-xs mt-auto">
<div class="flex items-center gap-space-xs text-primary font-label-sm text-label-sm font-bold">
<span class="material-symbols-outlined text-base">security</span>
            Automated Audit Guard
          </div>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
            All tenant admin mutations trigger an immutable cryptographic log hash. Audit retention: 365 calendar days.
          </p>
</div>
</div>
</div>
</div>
</div>
<script>
  let isStreamActive = true;
  function toggleStream(btn) {
    isStreamActive = !isStreamActive;
    if (isStreamActive) {
      btn.innerText = 'PAUSE';
      btn.classList.remove('text-tertiary');
      btn.classList.add('text-on-surface-variant');
    } else {
      btn.innerText = 'RESUME';
      btn.classList.remove('text-on-surface-variant');
      btn.classList.add('text-tertiary');
    }
  }

  function setCategory(btn, cat) {
    document.querySelectorAll('.filter-chip').forEach(c => {
      c.classList.remove('bg-primary', 'text-on-primary');
      c.classList.add('bg-surface-container', 'text-on-surface-variant');
    });
    btn.classList.remove('bg-surface-container', 'text-on-surface-variant');
    btn.classList.add('bg-primary', 'text-on-primary');

    const rows = document.querySelectorAll('.ledger-row');
    rows.forEach(r => {
      if (cat === 'all' || r.dataset.category === cat) {
        r.style.display = '';
      } else {
        r.style.display = 'none';
      }
    });
  }

  function filterLedger() {
    const q = document.getElementById('stream-search').value.toLowerCase();
    const rows = document.querySelectorAll('.ledger-row');
    rows.forEach(r => {
      const text = r.innerText.toLowerCase();
      r.style.display = text.includes(q) ? '' : 'none';
    });
  }
</script></main>
</div>
<script>
  document.querySelectorAll('[data-path]').forEach(function (item) {
    if (item.dataset.path === 'dashboard') item.href = "{{ route('super.admin') }}";
    if (item.dataset.path === 'businesses') item.href = "{{ route('super.admin.businesses') }}";
    if (item.dataset.path === 'subscriptions-billing') item.href = "{{ route('super.admin.billing') }}";
    if (item.dataset.path === 'plans-pricing') item.href = "{{ route('super.admin.plans') }}";
    if (item.dataset.path === 'platform-analytics') item.href = "{{ route('super.admin.analytics') }}";
    if (item.dataset.path === 'customer-activity') item.href = "{{ route('super.admin.activity') }}";
    if (item.dataset.path === 'support-tickets') item.href = "{{ route('super.admin.tickets') }}";
    if (item.dataset.path === 'platform-health') item.href = "{{ route('super.admin.health') }}";
    if (item.dataset.path === 'system-settings') item.href = "{{ route('super.admin.settings') }}";
  });
</script>
<script src="{{ asset('js/super-admin-navigation.js') }}"></script>
</body></html>
