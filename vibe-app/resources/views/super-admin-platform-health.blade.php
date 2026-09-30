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
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="customer-activity" href="#">Customer Activity</a>
<a class="flex items-center px-space-md py-space-sm rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors font-label-md text-label-md" data-path="support-tickets" href="#">Support Tickets</a>
<a aria-current="page" class="flex items-center px-space-md py-space-sm transition-colors bg-primary-container text-on-primary-container font-bold rounded-lg shadow-sm" data-path="platform-health" href="#">Platform Health</a>
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
<main class="relative pt-16 bg-background min-h-screen px-gutter-desktop py-space-lg"><div class="flex flex-col w-full gap-space-lg pb-space-xl">
<!-- Top Command Context Bar -->
<div class="flex flex-col xl:flex-row xl:items-center justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-space-sm flex-wrap">
<span class="font-label-sm text-label-sm px-space-sm py-0.5 rounded-full bg-surface-container-high text-on-surface-variant uppercase tracking-wider font-semibold">Production Tier 1</span>
<span class="inline-flex items-center gap-1.5 px-space-sm py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-semibold">
<span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
          Cluster Telemetry Live
        </span>
<div class="flex items-center gap-1 text-on-surface-variant font-mono-metric text-body-sm">
<span class="material-symbols-outlined text-sm">public</span>
<span>ap-southeast-1 (AWS Singapore)</span>
</div>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">Platform Health &amp; Infrastructure Monitoring</h1>
</div>
<!-- Actions & Quick Controls -->
<div class="flex items-center gap-space-sm self-start xl:self-auto">
<div class="flex items-center gap-space-xs px-space-md py-space-xs rounded-xl bg-surface-container-low text-on-surface-variant font-mono-metric text-body-sm shadow-sm">
<span class="material-symbols-outlined text-base text-primary">schedule</span>
<span id="live-pht-clock">10:42:19 AM PHT</span>
</div>
<button class="flex items-center gap-space-xs px-space-md py-space-xs rounded-xl bg-surface-container-highest hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-colors shadow-sm" type="button">
<span class="material-symbols-outlined text-base">history</span>
        Incident History
      </button>
<button class="flex items-center gap-space-xs px-space-md py-space-xs rounded-xl bg-primary text-on-primary font-label-md text-label-md shadow-md hover:bg-primary-container transition-all active:scale-95" id="refresh-telemetry-btn" type="button">
<span class="material-symbols-outlined text-base">refresh</span>
        Run Diagnostics
      </button>
</div>
</div>
<!-- Primary Status Banner -->
<div class="relative overflow-hidden rounded-2xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-space-lg">
<div class="absolute -right-12 -top-12 w-64 h-64 bg-tertiary/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="flex items-start md:items-center gap-space-md z-10">
<div class="w-12 h-12 rounded-2xl bg-tertiary flex items-center justify-center text-on-tertiary shadow-md shrink-0">
<span class="material-symbols-outlined text-2xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-space-xs flex-wrap">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">All Systems Operational</span>
<span class="w-1.5 h-1.5 rounded-full bg-outline-variant"></span>
<span class="font-label-md text-label-md text-tertiary font-semibold">Zero Active Incidents</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">
          30-day cumulative uptime across microservices: <span class="font-mono-metric font-semibold text-on-surface">99.982%</span>. Mean time to recovery (MTTR): <span class="font-mono-metric font-semibold text-on-surface">3.8 mins</span>.
        </p>
</div>
</div>
<div class="flex items-center gap-space-lg z-10 shrink-0">
<div class="flex flex-col text-left md:text-right">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Sync Integrity</span>
<span class="font-headline-sm text-headline-sm text-primary font-bold">100.0%</span>
</div>
<div class="w-px h-8 bg-surface-container-high hidden md:block"></div>
<div class="flex flex-col text-left md:text-right">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Edge Edge-RTT</span>
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">21 ms</span>
</div>
</div>
</div>
<!-- Core Microservices Grid (6 Critical Engines) -->
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-lg">dns</span>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Core Service Health</h2>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Autonomous Heartbeat: 5s polling</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md">
<!-- Card 1: Biometric Face Recognition API -->
<div class="group relative rounded-2xl bg-surface-container-lowest p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between gap-space-md overflow-hidden">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="w-8 h-8 rounded-xl bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-base">face_unlock</span>
</span>
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Biometric Face API</span>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
              Operational
            </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
            Face landmark embedding engine (Mobile v3 &amp; Web Kiosk). Real-time verification model v2.4.
          </p>
</div>
<div class="flex items-center justify-between pt-space-xs bg-surface-container-low/50 -mx-space-md -mb-space-md px-space-md py-space-sm rounded-b-2xl">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Latency</span>
<span class="font-mono-metric text-mono-metric text-on-surface font-bold">142 ms</span>
</div>
<div class="flex flex-col items-end">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">30d Uptime</span>
<span class="font-mono-metric text-mono-metric text-tertiary font-bold">99.99%</span>
</div>
</div>
</div>
<!-- Card 2: GPS & Geofence Verification Engine -->
<div class="group relative rounded-2xl bg-surface-container-lowest p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between gap-space-md overflow-hidden">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="w-8 h-8 rounded-xl bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-base">fmd_good</span>
</span>
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Geofence Radius Engine</span>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
              Operational
            </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
            PostGIS spatial indexing with anti-spoofing altitude &amp; cell-tower polygon bounding check.
          </p>
</div>
<div class="flex items-center justify-between pt-space-xs bg-surface-container-low/50 -mx-space-md -mb-space-md px-space-md py-space-sm rounded-b-2xl">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Latency</span>
<span class="font-mono-metric text-mono-metric text-on-surface font-bold">48 ms</span>
</div>
<div class="flex flex-col items-end">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Accuracy</span>
<span class="font-mono-metric text-mono-metric text-tertiary font-bold">100.0%</span>
</div>
</div>
</div>
<!-- Card 3: Mobile Sync & Offline Queue -->
<div class="group relative rounded-2xl bg-surface-container-lowest p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between gap-space-md overflow-hidden">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="w-8 h-8 rounded-xl bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-base">sync</span>
</span>
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Offline Sync Queue</span>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
              Operational
            </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
            Kafka-backed multi-tenant ingestion queue for offline field punches &amp; batch clock events.
          </p>
</div>
<div class="flex items-center justify-between pt-space-xs bg-surface-container-low/50 -mx-space-md -mb-space-md px-space-md py-space-sm rounded-b-2xl">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Backlog Depth</span>
<span class="font-mono-metric text-mono-metric text-on-surface font-bold">0 msgs</span>
</div>
<div class="flex flex-col items-end">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Sync Rate</span>
<span class="font-mono-metric text-mono-metric text-tertiary font-bold">100%</span>
</div>
</div>
</div>
<!-- Card 4: DTR & Report Generation Worker -->
<div class="group relative rounded-2xl bg-surface-container-lowest p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between gap-space-md overflow-hidden">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="w-8 h-8 rounded-xl bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-base">receipt_long</span>
</span>
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">DTR &amp; Payroll Worker</span>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
              Operational
            </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
            Asynchronous multi-tenant daily time record compiling, DOLE compliance audit, and PDF export.
          </p>
</div>
<div class="flex items-center justify-between pt-space-xs bg-surface-container-low/50 -mx-space-md -mb-space-md px-space-md py-space-sm rounded-b-2xl">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Queue Latency</span>
<span class="font-mono-metric text-mono-metric text-on-surface font-bold">1.2 s</span>
</div>
<div class="flex flex-col items-end">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Active Jobs</span>
<span class="font-mono-metric text-mono-metric text-on-surface font-bold">14 / 64</span>
</div>
</div>
</div>
<!-- Card 5: SMS / Viber OTP Gateway -->
<div class="group relative rounded-2xl bg-surface-container-lowest p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between gap-space-md overflow-hidden">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="w-8 h-8 rounded-xl bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-base">chat</span>
</span>
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">SMS / Viber Gateway</span>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
              Operational
            </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
            Globe Telecom, Smart Communications &amp; Viber Enterprise multi-route failover carrier dispatch.
          </p>
</div>
<div class="flex items-center justify-between pt-space-xs bg-surface-container-low/50 -mx-space-md -mb-space-md px-space-md py-space-sm rounded-b-2xl">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Delivery Rate</span>
<span class="font-mono-metric text-mono-metric text-tertiary font-bold">99.8%</span>
</div>
<div class="flex flex-col items-end">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Dispatch P95</span>
<span class="font-mono-metric text-mono-metric text-on-surface font-bold">1.4 s</span>
</div>
</div>
</div>
<!-- Card 6: Payment Webhooks -->
<div class="group relative rounded-2xl bg-surface-container-lowest p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between gap-space-md overflow-hidden">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="w-8 h-8 rounded-xl bg-surface-container-low flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-base">account_balance_wallet</span>
</span>
<span class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Payment Webhooks</span>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
              Operational
            </span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-xs">
            GCash, Maya Business, PayMongo, Stripe recurring automated reconciliation &amp; invoicing pipelines.
          </p>
</div>
<div class="flex items-center justify-between pt-space-xs bg-surface-container-low/50 -mx-space-md -mb-space-md px-space-md py-space-sm rounded-b-2xl">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Webhook Success</span>
<span class="font-mono-metric text-mono-metric text-tertiary font-bold">100.0%</span>
</div>
<div class="flex flex-col items-end">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">24h Events</span>
<span class="font-mono-metric text-mono-metric text-on-surface font-bold">8,924</span>
</div>
</div>
</div>
</div>
</div>
<!-- Telemetry & Performance Bento Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-md">
<!-- Chart Panel: Morning Punch Spike & Throughput (7 Columns) -->
<div class="lg:col-span-7 rounded-2xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col justify-between gap-space-md">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-xs">
<div>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Cluster Telemetry</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">API Ingress &amp; Punch Spike Throughput</h3>
</div>
<div class="flex items-center gap-space-sm">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary font-semibold">
<span class="w-2 h-2 rounded-full bg-primary"></span>
            Peak: 3,420 Req/sec (08:00 AM)
          </span>
</div>
</div>
<!-- Rich Inline SVG Chart showing 24h punch curve with 8 AM spike -->
<div class="w-full h-56 relative flex items-end">
<svg class="w-full h-full overflow-visible" fill="none" preserveaspectratio="none" viewbox="0 0 680 180">
<defs>
<lineargradient id="primaryGradient" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#a63143" stop-opacity="0.28"></stop>
<stop offset="100%" stop-color="#a63143" stop-opacity="0.0"></stop>
</lineargradient>
<lineargradient id="strokeGradient" x1="0" x2="1" y1="0" y2="0">
<stop offset="0%" stop-color="#a63143"></stop>
<stop offset="40%" stop-color="#c64959"></stop>
<stop offset="60%" stop-color="#a63143"></stop>
<stop offset="100%" stop-color="#894d52"></stop>
</lineargradient>
</defs>
<!-- Horizontal guideline grid -->
<line stroke="#f3dedd" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="680" y1="30" y2="30"></line>
<line stroke="#f3dedd" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="680" y1="80" y2="80"></line>
<line stroke="#f3dedd" stroke-dasharray="4 4" stroke-width="1" x1="0" x2="680" y1="130" y2="130"></line>
<line stroke="#f3dedd" stroke-width="1" x1="0" x2="680" y1="175" y2="175"></line>
<!-- Smooth Area Fill -->
<path d="M 0 160 Q 60 155, 120 150 T 240 145 T 320 20 T 360 70 T 440 90 T 520 40 T 600 120 T 680 135 L 680 175 L 0 175 Z" fill="url(#primaryGradient)"></path>
<!-- Smooth Line Graph -->
<path d="M 0 160 Q 60 155, 120 150 T 240 145 T 320 20 T 360 70 T 440 90 T 520 40 T 600 120 T 680 135" stroke="url(#strokeGradient)" stroke-linecap="round" stroke-width="3"></path>
<!-- Morning Peak Indicator Marker (at 08:00 AM) -->
<circle cx="320" cy="20" fill="#a63143" r="5" stroke="#ffffff" stroke-width="2"></circle>
<!-- Midday Verification Burst (at 12:00 PM) -->
<circle cx="520" cy="40" fill="#a63143" r="4" stroke="#ffffff" stroke-width="2"></circle>
</svg>
<!-- Tooltip overlay card placed over the 08:00 AM spike -->
<div class="absolute left-[44%] top-1 bg-inverse-surface text-inverse-on-surface px-space-sm py-1 rounded-lg text-body-sm font-mono-metric shadow-lg pointer-events-none transform -translate-x-1/2">
<div class="flex items-center gap-1 font-semibold text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary-fixed"></span>
            08:00 AM Morning Shift Rush
          </div>
<div class="text-xs text-outline-variant">3,420 req/s • 0 drops</div>
</div>
</div>
<!-- X-axis Labels -->
<div class="flex justify-between items-center text-on-surface-variant font-mono-metric text-body-sm pt-space-xs">
<span>00:00</span>
<span>04:00</span>
<span class="font-bold text-primary">08:00 (Rush)</span>
<span>12:00</span>
<span>16:00</span>
<span>20:00</span>
<span>Current</span>
</div>
<div class="flex items-center justify-between pt-space-sm bg-surface-container-low px-space-md py-space-sm rounded-xl text-on-surface-variant font-body-sm">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-tertiary text-base">verified</span>
<span>Zero throttle events recorded during 2,800 concurrent biometric punch submissions.</span>
</div>
<span class="font-mono-metric font-semibold text-on-surface">Auto-scaled to 12 Pods</span>
</div>
</div>
<!-- Cluster Hardware & DB Telemetry (5 Columns) -->
<div class="lg:col-span-5 flex flex-col gap-space-md">
<!-- CPU & RAM Box -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col justify-between gap-space-md">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-base">memory</span>
<h3 class="font-label-lg text-label-lg text-on-surface font-bold">Kubernetes Node Metrics</h3>
</div>
<span class="font-label-sm text-label-sm text-tertiary font-semibold">Healthy Load</span>
</div>
<div class="grid grid-cols-2 gap-space-md">
<!-- CPU Gauge Widget -->
<div class="flex flex-col gap-space-xs bg-surface-container-low p-space-md rounded-xl">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Cluster CPU</span>
<span class="font-mono-metric text-headline-sm font-bold text-on-surface">28%</span>
</div>
<div class="w-full bg-surface-container-high h-2.5 rounded-full overflow-hidden">
<div class="bg-primary h-full rounded-full transition-all duration-500" style="width: 28%"></div>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-1">48 vCPUs (3.2 GHz Max)</span>
</div>
<!-- Memory Gauge Widget -->
<div class="flex flex-col gap-space-xs bg-surface-container-low p-space-md rounded-xl">
<div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Cluster RAM</span>
<span class="font-mono-metric text-headline-sm font-bold text-on-surface">42%</span>
</div>
<div class="w-full bg-surface-container-high h-2.5 rounded-full overflow-hidden">
<div class="bg-primary-container h-full rounded-full transition-all duration-500" style="width: 42%"></div>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-1">53.7 GB of 128 GB</span>
</div>
</div>
<div class="flex items-center justify-between text-on-surface-variant font-mono-metric text-body-sm pt-space-xs">
<span>Worker Pods: <strong class="text-on-surface font-semibold">32 / 32 Ready</strong></span>
<span>Pod Evictions: <strong class="text-on-surface font-semibold">0</strong></span>
</div>
</div>
<!-- Database Connection Pool & Replication -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col justify-between gap-space-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-base">database</span>
<h3 class="font-label-lg text-label-lg text-on-surface font-bold">PostgreSQL Master &amp; Read Replicas</h3>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-surface-container text-on-surface-variant font-mono-metric text-label-sm">Primary-Replica HA</span>
</div>
<div class="grid grid-cols-3 gap-space-sm pt-space-xs">
<div class="flex flex-col bg-surface-container-low p-space-sm rounded-xl">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Replication Lag</span>
<span class="font-mono-metric text-headline-sm font-bold text-tertiary mt-1">&lt; 4 ms</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Near Zero Desync</span>
</div>
<div class="flex flex-col bg-surface-container-low p-space-sm rounded-xl">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Active Pool</span>
<span class="font-mono-metric text-headline-sm font-bold text-on-surface mt-1">182</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Max Cap: 600</span>
</div>
<div class="flex flex-col bg-surface-container-low p-space-sm rounded-xl">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Cache Hit Rate</span>
<span class="font-mono-metric text-headline-sm font-bold text-on-surface mt-1">99.4%</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Shared Buffers</span>
</div>
</div>
<div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm pt-space-xs">
<span class="material-symbols-outlined text-sm text-tertiary">check</span>
<span>Automatic failover replica standing by in Availability Zone `ap-southeast-1b`.</span>
</div>
</div>
</div>
</div>
<!-- Operational Diagnostics & Telemetry Logs Table -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col gap-space-md">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
<div class="flex flex-col">
<div class="flex items-center gap-space-xs">
<span class="material-symbols-outlined text-primary text-base">terminal</span>
<h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Real-Time Ingress &amp; Error Diagnostic Stream</h3>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Continuous telemetry logging from Edge gateways and authentication brokers</p>
</div>
<div class="flex items-center gap-space-xs">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
<span class="font-label-sm text-label-sm font-semibold text-tertiary uppercase tracking-wider">Stream Active (HTTP 2xx: 99.94%)</span>
</div>
</div>
<!-- Table Container -->
<div class="overflow-x-auto -mx-space-lg px-space-lg">
<table class="w-full text-left font-body-sm text-body-sm text-on-surface">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
<th class="py-space-sm px-space-md rounded-l-xl">Microservice</th>
<th class="py-space-sm px-space-md">Endpoint</th>
<th class="py-space-sm px-space-md">Status</th>
<th class="py-space-sm px-space-md">RTT Latency</th>
<th class="py-space-sm px-space-md">Timestamp</th>
<th class="py-space-sm px-space-md rounded-r-xl">Diagnostic Note</th>
</tr>
</thead>
<tbody class="divide-transparent">
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-space-sm px-space-md font-semibold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
              Biometric Engine
            </td>
<td class="py-space-sm px-space-md font-mono-metric text-on-surface-variant">/api/v2/punch/verify-face</td>
<td class="py-space-sm px-space-md">
<span class="px-2 py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-mono-metric font-semibold text-xs">200 OK</span>
</td>
<td class="py-space-sm px-space-md font-mono-metric">138 ms</td>
<td class="py-space-sm px-space-md font-mono-metric text-on-surface-variant">10:42:14.204</td>
<td class="py-space-sm px-space-md text-on-surface-variant truncate max-w-xs">Face embedding match 0.963 confidence (Tenant #4182)</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-space-sm px-space-md font-semibold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
              Geofence Engine
            </td>
<td class="py-space-sm px-space-md font-mono-metric text-on-surface-variant">/api/v1/geo/verify-boundary</td>
<td class="py-space-sm px-space-md">
<span class="px-2 py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-mono-metric font-semibold text-xs">200 OK</span>
</td>
<td class="py-space-sm px-space-md font-mono-metric">42 ms</td>
<td class="py-space-sm px-space-md font-mono-metric text-on-surface-variant">10:42:11.890</td>
<td class="py-space-sm px-space-md text-on-surface-variant truncate max-w-xs">In-radius coordinate validated (+/- 3.2m accuracy)</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-space-sm px-space-md font-semibold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-error"></span>
              OTP Gateway
            </td>
<td class="py-space-sm px-space-md font-mono-metric text-on-surface-variant">/integrations/sms/dispatch</td>
<td class="py-space-sm px-space-md">
<span class="px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-mono-metric font-semibold text-xs">429 SlowDown</span>
</td>
<td class="py-space-sm px-space-md font-mono-metric">812 ms</td>
<td class="py-space-sm px-space-md font-mono-metric text-on-surface-variant">10:41:58.112</td>
<td class="py-space-sm px-space-md text-error truncate max-w-xs font-medium">Smart route throttled; switched automatically to backup Globe API</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-space-sm px-space-md font-semibold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
              Payment Webhook
            </td>
<td class="py-space-sm px-space-md font-mono-metric text-on-surface-variant">/webhooks/paymongo/events</td>
<td class="py-space-sm px-space-md">
<span class="px-2 py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-mono-metric font-semibold text-xs">200 OK</span>
</td>
<td class="py-space-sm px-space-md font-mono-metric">94 ms</td>
<td class="py-space-sm px-space-md font-mono-metric text-on-surface-variant">10:41:43.018</td>
<td class="py-space-sm px-space-md text-on-surface-variant truncate max-w-xs">Invoice inv_9281a paid via GCash QR; subscription renewed</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-space-sm px-space-md font-semibold flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
              Offline Batch Sync
            </td>
<td class="py-space-sm px-space-md font-mono-metric text-on-surface-variant">/api/v1/sync/upload-batch</td>
<td class="py-space-sm px-space-md">
<span class="px-2 py-0.5 rounded-full bg-tertiary-container/15 text-tertiary font-mono-metric font-semibold text-xs">200 OK</span>
</td>
<td class="py-space-sm px-space-md font-mono-metric">310 ms</td>
<td class="py-space-sm px-space-md font-mono-metric text-on-surface-variant">10:40:59.742</td>
<td class="py-space-sm px-space-md text-on-surface-variant truncate max-w-xs">68 punches ingested from remote site tablet without collisions</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Maintenance & Disaster Recovery Schedule -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
<!-- Automated Daily Snapshot Card -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col justify-between gap-space-md">
<div class="flex items-start justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-tertiary-container/20 text-tertiary flex items-center justify-center">
<span class="material-symbols-outlined text-xl">cloud_done</span>
</div>
<div>
<h4 class="font-label-lg text-label-lg text-on-surface font-bold">Automated Daily Database Snapshot</h4>
<span class="font-body-sm text-body-sm text-tertiary font-semibold flex items-center gap-1">
<span class="material-symbols-outlined text-sm">task_alt</span> Completed Today at 03:00 AM PHT
            </span>
</div>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-surface-container text-on-surface-variant font-mono-metric text-label-sm">Snapshot S3 Cold-Storage</span>
</div>
<div class="grid grid-cols-3 gap-space-sm bg-surface-container-low p-space-md rounded-xl">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Archive Size</span>
<span class="font-mono-metric text-headline-sm font-bold text-on-surface">14.2 GB</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Duration</span>
<span class="font-mono-metric text-headline-sm font-bold text-on-surface">4m 12s</span>
</div>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">RPO / RTO</span>
<span class="font-mono-metric text-headline-sm font-bold text-tertiary">&lt; 15 min</span>
</div>
</div>
<div class="flex items-center justify-between text-body-sm text-on-surface-variant">
<span>AES-256 Encrypted &amp; Geographically Replicated to Osaka (ap-northeast-3)</span>
<button class="text-primary hover:underline font-semibold font-label-sm text-label-sm" type="button">Verify Checksum</button>
</div>
</div>
<!-- Scheduled Maintenance Window Card -->
<div class="rounded-2xl bg-surface-container-lowest p-space-lg shadow-sm flex flex-col justify-between gap-space-md">
<div class="flex items-start justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-xl bg-surface-container-high text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-xl">published_with_changes</span>
</div>
<div>
<h4 class="font-label-lg text-label-lg text-on-surface font-bold">Next Maintenance Window</h4>
<span class="font-body-sm text-body-sm text-on-surface-variant">Zero-Downtime Rolling Kernel Patch</span>
</div>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">Planned In 5 Days</span>
</div>
<div class="flex flex-col gap-space-xs bg-surface-container-low p-space-md rounded-xl">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md font-semibold text-on-surface">Sunday, 02:00 AM - 03:00 AM PHT</span>
<span class="font-mono-metric text-body-sm text-on-surface-variant">Target Duration: 15 mins</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
          PostgreSQL minor security upgrade to v16.3 &amp; Redis Cluster memory defragmentation. Automatic multi-AZ read failover engaged. No worker clock-in interruption expected.
        </p>
</div>
<div class="flex items-center justify-between text-body-sm text-on-surface-variant">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-tertiary">check_circle</span>
          Automated customer notification scheduled 48h prior
        </span>
<button class="text-primary hover:underline font-semibold font-label-sm text-label-sm" type="button">Manage Window</button>
</div>
</div>
</div>
</div>
<script>
  // Dynamic Live Timekeeping for PHT (UTC+8)
  function updateLivePHT() {
    const el = document.getElementById('live-pht-clock');
    if (!el) return;
    const now = new Date();
    // Format options for Manila/Singapore standard time
    const options = {
      timeZone: 'Asia/Manila',
      hour: '2-digit',
      minute: '2-digit',
      second: '2-digit',
      hour12: true
    };
    el.textContent = `${new Intl.DateTimeFormat('en-US', options).format(now)} PHT`;
  }
  setInterval(updateLivePHT, 1000);
  updateLivePHT();

  // Diagnostics Button Micro-interaction
  const diagBtn = document.getElementById('refresh-telemetry-btn');
  if (diagBtn) {
    diagBtn.addEventListener('click', function() {
      const origText = this.innerHTML;
      this.innerHTML = '<span class="material-symbols-outlined text-base animate-spin">sync</span> Running Checks...';
      this.disabled = true;
      setTimeout(() => {
        this.innerHTML = '<span class="material-symbols-outlined text-base">check</span> All Systems Healthy';
        setTimeout(() => {
          this.innerHTML = origText;
          this.disabled = false;
        }, 2000);
      }, 950);
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
