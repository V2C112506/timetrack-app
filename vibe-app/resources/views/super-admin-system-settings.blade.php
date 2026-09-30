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
<main class="relative pt-16 bg-background min-h-screen px-gutter-desktop py-space-lg"><div class="flex flex-col w-full">
<div class="flex flex-col gap-space-lg">
<!-- Top Action Bar -->
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-md pb-space-xs">
<div class="flex flex-col">
<div class="flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider">
<span>Global Control Plane</span>
<span>/</span>
<span class="text-primary font-semibold">Config Node #01-PH</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">System Settings &amp; Platform Configuration</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Manage root multi-tenant defaults, Southeast Asia payment channels, biometric security thresholds, and carrier telemetries.</p>
</div>
<div class="flex items-center gap-space-sm self-start sm:self-auto">
<button class="px-space-md py-2.5 rounded-full bg-surface-container-high hover:bg-surface-variant text-on-surface-variant hover:text-on-surface font-label-md text-label-md transition-colors flex items-center gap-space-xs" id="discardBtn" type="button">
<span class="material-symbols-outlined text-lg">history</span>
          Discard Unsaved
        </button>
<button class="px-space-lg py-2.5 rounded-full bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md shadow-sm transition-all transform active:scale-[0.98] flex items-center gap-space-xs" id="saveBtn" type="button">
<span class="material-symbols-outlined text-lg">verified</span>
          Save Changes
        </button>
</div>
</div>
<!-- Alert / Toast Banner placeholder -->
<div class="hidden rounded-xl bg-tertiary-container p-space-md text-on-tertiary-container items-center justify-between transition-all" id="statusNotification">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-xl">cloud_done</span>
<span class="font-label-md text-label-md font-semibold">Platform runtime parameters synchronized across all 14 tenant clusters.</span>
</div>
<button class="text-on-tertiary-container/80 hover:text-on-tertiary-container" onclick="document.getElementById('statusNotification').classList.add('hidden')">
<span class="material-symbols-outlined text-base">close</span>
</button>
</div>
<!-- Main Settings Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
<!-- Left Sub-Navigation Rail -->
<div class="lg:col-span-3 flex flex-col gap-space-xs bg-surface-container-lowest p-space-sm rounded-2xl shadow-sm">
<div class="px-space-md py-space-xs">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">Configuration Domains</span>
</div>
<button class="nav-subtab w-full flex items-center justify-between px-space-md py-space-sm rounded-xl text-left font-label-md text-label-md transition-colors bg-primary-container text-on-primary-container" id="tab-btn-general" onclick="switchTab('general')" type="button">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-lg">tune</span>
<span>General &amp; Defaults</span>
</div>
<span class="text-xs font-semibold px-2 py-0.5 rounded-full bg-surface-container-lowest/20">Active</span>
</button>
<button class="nav-subtab w-full flex items-center justify-between px-space-md py-space-sm rounded-xl text-left font-label-md text-label-md transition-colors text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface" id="tab-btn-payments" onclick="switchTab('payments')" type="button">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-lg">account_balance_wallet</span>
<span>Payment Gateways</span>
</div>
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
</button>
<button class="nav-subtab w-full flex items-center justify-between px-space-md py-space-sm rounded-xl text-left font-label-md text-label-md transition-colors text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface" id="tab-btn-security" onclick="switchTab('security')" type="button">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-lg">fingerprint</span>
<span>Biometrics &amp; GPS</span>
</div>
<span class="text-xs font-semibold px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant">Strict</span>
</button>
<button class="nav-subtab w-full flex items-center justify-between px-space-md py-space-sm rounded-xl text-left font-label-md text-label-md transition-colors text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface" id="tab-btn-sms" onclick="switchTab('sms')" type="button">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-lg">sms</span>
<span>SMS &amp; Notifications</span>
</div>
<span class="material-symbols-outlined text-sm text-tertiary">check_circle</span>
</button>
<button class="nav-subtab w-full flex items-center justify-between px-space-md py-space-sm rounded-xl text-left font-label-md text-label-md transition-colors text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface" id="tab-btn-access" onclick="switchTab('access')" type="button">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-lg">shield_person</span>
<span>Admin Access &amp; Audit</span>
</div>
<span class="material-symbols-outlined text-sm text-primary">lock</span>
</button>
<button class="nav-subtab w-full flex items-center justify-between px-space-md py-space-sm rounded-xl text-left font-label-md text-label-md transition-colors text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface" id="tab-btn-maintenance" onclick="switchTab('maintenance')" type="button">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-lg">construction</span>
<span>Maintenance Mode</span>
</div>
<span class="text-xs font-semibold px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant">Off</span>
</button>
<div class="mt-space-lg p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-xs">
<span class="font-label-sm text-label-sm font-semibold text-on-surface">Cluster Telemetry</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Global variables cached on AWS ap-southeast-1 edge nodes.</p>
<div class="flex items-center gap-space-xs mt-space-xs text-tertiary font-label-sm text-label-sm">
<span class="w-2 h-2 rounded-full bg-tertiary"></span>
<span>Edge latency: 19ms</span>
</div>
</div>
</div>
<!-- Settings Content Panels -->
<div class="lg:col-span-9 flex flex-col gap-space-lg">
<!-- SECTION 1: General & Platform Defaults -->
<section class="settings-panel flex flex-col gap-space-md bg-surface-container-lowest p-space-xl rounded-2xl shadow-sm" id="panel-general">
<div class="flex items-center justify-between border-b pb-space-sm border-outline-variant/30">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">General &amp; Platform Defaults</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Core operational rules automatically provisioned to all newly registered tenant organizations.</p>
</div>
<span class="material-symbols-outlined text-primary text-2xl">globe</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg pt-space-xs">
<!-- Default Trial Length -->
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between">
<span>Default Organization Trial Length</span>
<span class="text-primary font-mono-metric text-mono-metric">14 Days</span>
</label>
<div class="flex items-center gap-space-sm bg-surface-container-low rounded-xl px-space-md py-space-sm">
<span class="material-symbols-outlined text-on-surface-variant">timelapse</span>
<select class="bg-transparent w-full outline-none font-body-md text-body-md text-on-surface">
<option value="7">7 Days - Standard Flash Trial</option>
<option selected="" value="14">14 Days - SaaS Growth Standard (Recommended)</option>
<option value="30">30 Days - Enterprise Pilot</option>
<option value="60">60 Days - Custom Healthcare Agreement</option>
</select>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Trial accounts are granted complete access to multi-site punch logs and geofencing.</span>
</div>
<!-- Currency Configuration -->
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between">
<span>Platform Base Ledger Currency</span>
<span class="text-tertiary font-mono-metric text-mono-metric">PHP (₱)</span>
</label>
<div class="flex items-center gap-space-sm bg-surface-container-low rounded-xl px-space-md py-space-sm">
<span class="material-symbols-outlined text-on-surface-variant">payments</span>
<select class="bg-transparent w-full outline-none font-body-md text-body-md text-on-surface">
<option selected="" value="PHP">Philippine Peso (₱ / PHP) - Primary Regional Node</option>
<option value="USD">United States Dollar ($ / USD)</option>
<option value="SGD">Singapore Dollar (S$ / SGD)</option>
<option value="MYR">Malaysian Ringgit (RM / MYR)</option>
</select>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Billing tax calculations and merchant payout formulas anchor to this currency.</span>
</div>
<!-- Grace Period -->
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between">
<span>Dunning Grace Period (Failed Billing)</span>
<span class="text-primary font-mono-metric text-mono-metric">5 Calendar Days</span>
</label>
<div class="flex items-center gap-space-sm bg-surface-container-low rounded-xl px-space-md py-space-sm">
<span class="material-symbols-outlined text-on-surface-variant">credit_card_off</span>
<input class="bg-transparent w-full outline-none font-body-md text-body-md text-on-surface" max="30" min="1" type="number" value="5"/>
<span class="font-label-md text-label-md text-on-surface-variant">days</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Days allowed before employee clock-in unlocks switch to read-only compliance lock.</span>
</div>
<!-- Default Organization Slot Limit -->
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between">
<span>Starter Tier User Headcount Cap</span>
<span class="font-mono-metric text-mono-metric text-on-surface">25 Seats</span>
</label>
<div class="flex items-center gap-space-sm bg-surface-container-low rounded-xl px-space-md py-space-sm">
<span class="material-symbols-outlined text-on-surface-variant">groups</span>
<input class="bg-transparent w-full outline-none font-body-md text-body-md text-on-surface" max="500" min="5" type="number" value="25"/>
<span class="font-label-md text-label-md text-on-surface-variant">members</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Seat counts surpassing this cap automatically suggest upgrade to Pro Corporate.</span>
</div>
</div>
</section>
<!-- SECTION 2: Payment Gateway Integrations -->
<section class="settings-panel flex flex-col gap-space-md bg-surface-container-lowest p-space-xl rounded-2xl shadow-sm" id="panel-payments">
<div class="flex items-center justify-between border-b pb-space-sm border-outline-variant/30">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Philippines &amp; Regional Payment Gateways</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Direct API keys, e-wallet webhook channels, and automated merchant transaction routers.</p>
</div>
<span class="material-symbols-outlined text-primary text-2xl">account_balance</span>
</div>
<div class="flex flex-col gap-space-md pt-space-xs">
<!-- GCash Business Direct -->
<div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<div class="flex items-start gap-space-md">
<div class="w-12 h-12 rounded-xl bg-surface-container-lowest flex items-center justify-center text-primary shadow-sm flex-shrink-0">
<span class="material-symbols-outlined text-2xl">smartphone</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-space-sm">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">GCash Business Direct API</span>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> Connected • Production
                    </span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Merchant ID: <code class="font-mono-metric text-xs text-on-surface">GCSH-PH-99214-MNL</code> | Webhook status: <strong class="text-tertiary">Active (99.99%)</strong></span>
</div>
</div>
<div class="flex items-center gap-space-sm">
<button class="px-space-md py-2 rounded-lg bg-surface-container-highest hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors" type="button">
                  Rotate Secret
                </button>
<button class="px-space-md py-2 rounded-lg bg-primary/10 hover:bg-primary/20 text-primary font-label-md text-label-md transition-colors" type="button">
                  Test Webhook
                </button>
</div>
</div>
<!-- Maya Enterprise Gateway -->
<div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col md:flex-row md:items-center justify-between gap-space-md">
<div class="flex items-start gap-space-md">
<div class="w-12 h-12 rounded-xl bg-surface-container-lowest flex items-center justify-center text-tertiary shadow-sm flex-shrink-0">
<span class="material-symbols-outlined text-2xl">account_balance_wallet</span>
</div>
<div class="flex flex-col">
<div class="flex items-center gap-space-sm">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Maya Enterprise Checkout</span>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-semibold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> Connected • Auto-Capture
                    </span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Public Key: <code class="font-mono-metric text-xs text-on-surface">pk-mya-prod-778103****4901</code> | Real-time QR Ph Enabled</span>
</div>
</div>
<div class="flex items-center gap-space-sm">
<button class="px-space-md py-2 rounded-lg bg-surface-container-highest hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors" type="button">
                  Config Keys
                </button>
<button class="px-space-md py-2 rounded-lg bg-primary/10 hover:bg-primary/20 text-primary font-label-md text-label-md transition-colors" type="button">
                  Run Diagnostic
                </button>
</div>
</div>
<!-- Card Processing Toggle (PayMongo / Stripe PH) -->
<div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col gap-space-md">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-primary text-xl">credit_card</span>
<div>
<div class="font-label-lg text-label-lg font-bold text-on-surface">Credit / Debit Card Processor</div>
<div class="font-body-sm text-body-sm text-on-surface-variant">Routes Visa, Mastercard, and JCB transactions via PayMongo &amp; Stripe Philippines</div>
</div>
</div>
<!-- Test Mode Switcher -->
<div class="flex items-center gap-space-xs bg-surface-container-highest p-1 rounded-full">
<button class="px-space-md py-1 rounded-full text-xs font-semibold bg-surface-container-lowest text-on-surface shadow-xs" type="button">Live Mode</button>
<button class="px-space-md py-1 rounded-full text-xs font-semibold text-on-surface-variant hover:text-on-surface" type="button">Sandbox Test</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-md pt-space-xs">
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-on-surface-variant">Live Public Key</span>
<input class="bg-surface-container-lowest px-space-md py-2 rounded-xl font-mono-metric text-xs text-on-surface outline-none cursor-default" readonly="" type="text" value="{{ config('services.stripe.key', 'Not configured') }}"/>
</div>
<div class="flex flex-col gap-1">
<span class="font-label-sm text-label-sm text-on-surface-variant">Live Secret Restricted Token</span>
<input class="bg-surface-container-lowest px-space-md py-2 rounded-xl font-mono-metric text-xs text-on-surface outline-none cursor-default" readonly="" type="password" value="{{ config('services.stripe.secret', 'Not configured') }}"/>
</div>
</div>
</div>
<!-- Manual Bank & Over-the-counter -->
<div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col gap-space-sm">
<div class="flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<span class="material-symbols-outlined text-on-surface-variant text-xl">account_tree</span>
<span class="font-label-lg text-label-lg font-bold text-on-surface">Over-The-Counter (OTC) &amp; Bank Transfer Instructions</span>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-11 h-6 bg-surface-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
<textarea class="w-full bg-surface-container-lowest p-space-md rounded-xl font-body-sm text-body-sm text-on-surface outline-none placeholder:text-on-surface-variant focus:ring-2 focus:ring-primary/20" rows="3">Please deposit SaaS renewal fees to:
BDO Unibank (Current): 0041-8902-1104 / TimeTrack PH Cloud Tech Inc.
BPI Family: 2209-1142-99
Send official bank slip receipt to billing@timetrack.ph with Tenant ID reference.</textarea>
</div>
</div>
</section>
<!-- SECTION 3: Global Geofence & Biometric Constraints -->
<section class="settings-panel flex flex-col gap-space-md bg-surface-container-lowest p-space-xl rounded-2xl shadow-sm" id="panel-security">
<div class="flex items-center justify-between border-b pb-space-sm border-outline-variant/30">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Global Geofence &amp; Biometric Strictness</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Hardware-enforced mobile perimeter tolerances and AI facial verification policies across all punch devices.</p>
</div>
<span class="material-symbols-outlined text-primary text-2xl">verified_user</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md pt-space-xs">
<!-- GPS Accuracy Threshold Card -->
<div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface font-semibold">Min GPS Accuracy</span>
<span class="material-symbols-outlined text-primary text-xl">gps_fixed</span>
</div>
<div class="flex flex-col gap-1">
<div class="font-display-time-mobile text-display-time-mobile text-on-surface font-bold">≤ 15<span class="text-xl font-normal text-on-surface-variant ml-1">meters</span></div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Punches with cellular triangulation jitter &gt; 15m are automatically flagged for manager override.</p>
</div>
<div class="pt-space-xs">
<input class="w-full accent-primary cursor-pointer" max="50" min="5" type="range" value="15"/>
<div class="flex justify-between text-xs text-on-surface-variant mt-1">
<span>5m (Ultra High)</span>
<span>15m (Optimal)</span>
<span>50m (Lenient)</span>
</div>
</div>
</div>
<!-- Face Liveness Strictness -->
<div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col gap-space-md">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md text-on-surface font-semibold">Face Liveness AI</span>
<span class="material-symbols-outlined text-primary text-xl">face</span>
</div>
<div class="flex flex-col gap-2">
<label class="flex items-center gap-space-sm p-2 rounded-xl bg-surface-container-lowest cursor-pointer hover:bg-surface-variant/30">
<input class="accent-primary" name="face_strictness" type="radio" value="standard"/>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm font-semibold text-on-surface">Standard</span>
<span class="text-xs text-on-surface-variant">Static portrait match only</span>
</div>
</label>
<label class="flex items-center gap-space-sm p-2 rounded-xl bg-surface-container-lowest cursor-pointer hover:bg-surface-variant/30">
<input class="accent-primary" name="face_strictness" type="radio" value="high"/>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm font-semibold text-on-surface">High</span>
<span class="text-xs text-on-surface-variant">Blink &amp; head movement challenge</span>
</div>
</label>
<label class="flex items-center gap-space-sm p-2 rounded-xl bg-surface-variant cursor-pointer">
<input checked="" class="accent-primary" name="face_strictness" type="radio" value="maximum"/>
<div class="flex flex-col">
<span class="font-label-sm text-label-sm font-semibold text-primary">Maximum Anti-Spoofing</span>
<span class="text-xs text-on-surface-variant">3D Depth + Screen Glare Detection</span>
</div>
</label>
</div>
</div>
<!-- Anti-Mock & Jailbreak Security -->
<div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-md text-label-md text-on-surface font-semibold">Integrity Protections</span>
<span class="material-symbols-outlined text-tertiary text-xl">security</span>
</div>
<div class="flex flex-col gap-space-sm">
<div class="flex items-center justify-between bg-surface-container-lowest p-space-sm rounded-xl">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm font-semibold text-on-surface">Anti-Mock Location</span>
<span class="text-xs text-on-surface-variant">Block Fake GPS App injects</span>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-semibold">FORCED ON</span>
</div>
<div class="flex items-center justify-between bg-surface-container-lowest p-space-sm rounded-xl">
<div class="flex flex-col">
<span class="font-label-sm text-label-sm font-semibold text-on-surface">Jailbreak / Root Check</span>
<span class="text-xs text-on-surface-variant">Reject Magisk &amp; Cydia runtime</span>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-semibold">FORCED ON</span>
</div>
</div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-space-sm">Enforced automatically through Android Knox &amp; iOS DeviceCheck SDK.</p>
</div>
</div>
</section>
<!-- SECTION 4: SMS & Viber Notification Provider Settings -->
<section class="settings-panel flex flex-col gap-space-md bg-surface-container-lowest p-space-xl rounded-2xl shadow-sm" id="panel-sms">
<div class="flex items-center justify-between border-b pb-space-sm border-outline-variant/30">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">SMS &amp; Viber Notification Gateway</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Philippine carrier direct endpoints for urgent shift alerts, 2FA logins, and punch receipts.</p>
</div>
<span class="material-symbols-outlined text-primary text-2xl">cell_tower</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg pt-space-xs">
<!-- Gateway Provider Credential -->
<div class="flex flex-col gap-space-md">
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-semibold">Preferred Local Teleco Gateway</label>
<select class="w-full bg-surface-container-low px-space-md py-space-sm rounded-xl font-body-md text-body-md text-on-surface outline-none">
<option selected="">Semaphore PH (Globe/Smart Direct Routing)</option>
<option>Movider Philippines Enterprise</option>
<option>Twilio Southeast Asia Transit</option>
<option>Viber Business Messaging API</option>
</select>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-semibold">Semaphore API Key</label>
<div class="flex items-center bg-surface-container-low px-space-md py-space-sm rounded-xl">
<input class="bg-transparent w-full outline-none font-mono-metric text-xs text-on-surface" type="password" value="sem_live_99014ab8890214ee67"/>
<button class="text-on-surface-variant hover:text-on-surface text-sm" type="button">
<span class="material-symbols-outlined text-base">visibility</span>
</button>
</div>
</div>
<div class="flex flex-col gap-space-xs">
<label class="font-label-md text-label-md text-on-surface font-semibold">Registered Sender ID</label>
<input class="bg-surface-container-low px-space-md py-space-sm rounded-xl font-mono-metric text-xs text-on-surface outline-none" type="text" value="TIMETRACK"/>
<span class="text-xs text-on-surface-variant">National Telecommunications Commission (NTC) approved alias.</span>
</div>
</div>
<!-- Balance Threshold & Metrics -->
<div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center justify-between">
<span class="font-label-md text-label-md font-bold text-on-surface">Carrier Credit Pool</span>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary-container text-on-tertiary-container font-label-sm text-label-sm font-semibold">Healthy</span>
</div>
<div class="font-display-time-mobile text-display-time-mobile text-tertiary font-bold">14,820 <span class="text-sm font-normal text-on-surface-variant">Credits left</span></div>
<div class="w-full bg-surface-variant h-2 rounded-full overflow-hidden">
<div class="bg-tertiary h-full rounded-full" style="width: 74%;"></div>
</div>
</div>
<!-- Alert threshold config -->
<div class="flex flex-col gap-space-xs pt-space-xs border-t border-outline-variant/30">
<label class="font-label-md text-label-md text-on-surface font-semibold flex items-center justify-between">
<span>Low Balance Dispatch Warning Threshold</span>
<span class="text-primary font-mono-metric text-mono-metric font-bold">&lt; 500 Credits</span>
</label>
<div class="flex items-center gap-space-sm bg-surface-container-lowest rounded-xl px-space-md py-2">
<span class="material-symbols-outlined text-error text-lg">warning</span>
<input class="bg-transparent w-full outline-none font-body-md text-body-md text-on-surface" max="5000" min="50" type="number" value="500"/>
<span class="text-xs text-on-surface-variant">credits</span>
</div>
<span class="font-body-sm text-body-sm text-on-surface-variant">Sends automated Telegram &amp; email alerts to Platform Owner when remaining quota drops below threshold.</span>
</div>
</div>
</div>
</section>
<!-- SECTION 5: Super Admin Security & Access Control -->
<section class="settings-panel flex flex-col gap-space-md bg-surface-container-lowest p-space-xl rounded-2xl shadow-sm" id="panel-access">
<div class="flex items-center justify-between border-b pb-space-sm border-outline-variant/30">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Super Admin Security &amp; Compliance</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Root credential protection, multi-factor policies, and statutory compliance audit trails.</p>
</div>
<span class="material-symbols-outlined text-primary text-2xl">lock_clock</span>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md pt-space-xs">
<!-- 2FA Enforcement -->
<div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-md text-label-md text-on-surface font-semibold">Admin 2FA Policy</span>
<span class="material-symbols-outlined text-tertiary">passkey</span>
</div>
<span class="px-space-xs py-0.5 rounded-full bg-tertiary/10 text-tertiary font-label-sm text-label-sm font-semibold inline-block mb-space-sm">ENFORCED MANDATORY</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">Hardware FIDO2 WebAuthn or Google Authenticator TOTP required for all super-admin role sessions.</p>
</div>
<button class="mt-space-md w-full py-2 bg-surface-container-lowest hover:bg-surface-variant rounded-xl font-label-md text-label-md text-on-surface transition-colors" type="button">
                Audit 2FA Keys
              </button>
</div>
<!-- Session Inactivity Timeout -->
<div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-md text-label-md text-on-surface font-semibold">Session Lifetime</span>
<span class="material-symbols-outlined text-primary">timer</span>
</div>
<div class="font-headline-md text-headline-md text-on-surface font-bold mb-space-xs">4 Hours</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Automated revocation and token purge upon inactivity across Owner and Root nodes.</p>
</div>
<select class="mt-space-md w-full py-2 px-space-sm bg-surface-container-lowest rounded-xl font-body-sm text-body-sm text-on-surface outline-none">
<option value="1">1 Hour (High Security)</option>
<option selected="" value="4">4 Hours (Standard)</option>
<option value="8">8 Hours (Shift Length)</option>
</select>
</div>
<!-- Audit Log Retention Policy -->
<div class="p-space-md rounded-2xl bg-surface-container-low flex flex-col justify-between">
<div>
<div class="flex items-center justify-between mb-space-xs">
<span class="font-label-md text-label-md text-on-surface font-semibold">Audit Retention</span>
<span class="material-symbols-outlined text-primary">archive</span>
</div>
<div class="font-headline-md text-headline-md text-on-surface font-bold mb-space-xs">365 Days</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">Immutable encrypted S3 glacier archive for DOLE &amp; Philippine Data Privacy Act (DPA 2012) audits.</p>
</div>
<button class="mt-space-md w-full py-2 bg-surface-container-lowest hover:bg-surface-variant rounded-xl font-label-md text-label-md text-on-surface transition-colors flex items-center justify-center gap-1" type="button">
<span class="material-symbols-outlined text-sm">download</span> Export Proof
              </button>
</div>
</div>
</section>
<!-- SECTION 6: Maintenance Mode -->
<section class="settings-panel flex flex-col gap-space-md bg-surface-container-lowest p-space-xl rounded-2xl shadow-sm" id="panel-maintenance">
<div class="flex items-center justify-between border-b pb-space-sm border-outline-variant/30">
<div>
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Emergency &amp; Platform Maintenance Window</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Temporarily reroutes web app endpoints to the static maintenance status page while keeping mobile local SQLite queue buffers intact.</p>
</div>
<span class="material-symbols-outlined text-error text-2xl">warning</span>
</div>
<div class="p-space-md rounded-2xl bg-error-container/40 flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
<div class="flex items-start gap-space-md">
<span class="material-symbols-outlined text-error text-3xl">build_circle</span>
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm text-on-error-container font-bold">Global Maintenance Mode is CURRENTLY OFF</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">When activated, non-superadmin users see an offline status splash. Field staff mobile punch attempts are queued locally in encrypted device storage.</span>
</div>
</div>
<button class="px-space-lg py-2.5 rounded-full bg-error hover:bg-error/90 text-on-error font-label-md text-label-md font-semibold transition-colors flex-shrink-0" type="button">
              Engage Maintenance
            </button>
</div>
</section>
</div>
</div>
</div>
</div>
<script>
  function switchTab(tabId) {
    // Hide all panels
    const panels = document.querySelectorAll('.settings-panel');
    panels.forEach(p => p.classList.add('hidden'));

    // Reset all sub-tab buttons
    const navButtons = document.querySelectorAll('.nav-subtab');
    navButtons.forEach(btn => {
      btn.classList.remove('bg-primary-container', 'text-on-primary-container');
      btn.classList.add('text-on-surface-variant', 'hover:bg-surface-container-low', 'hover:text-on-surface');
    });

    // Show target panel
    const targetPanel = document.getElementById('panel-' + tabId);
    if (targetPanel) {
      targetPanel.classList.remove('hidden');
    }

    // Highlight active button
    const targetBtn = document.getElementById('tab-btn-' + tabId);
    if (targetBtn) {
      targetBtn.classList.add('bg-primary-container', 'text-on-primary-container');
      targetBtn.classList.remove('text-on-surface-variant', 'hover:bg-surface-container-low', 'hover:text-on-surface');
    }
  }

  // Save changes micro-interaction
  document.getElementById('saveBtn')?.addEventListener('click', function() {
    const notify = document.getElementById('statusNotification');
    if (notify) {
      notify.classList.remove('hidden');
      notify.classList.add('flex');
      window.scrollTo({ top: 0, behavior: 'smooth' });
      setTimeout(() => {
        notify.classList.add('hidden');
        notify.classList.remove('flex');
      }, 5000);
    }
  });

  // Discard changes trigger
  document.getElementById('discardBtn')?.addEventListener('click', function() {
    if (confirm('Discard any pending parameter changes made in this session?')) {
      window.location.reload();
    }
  });
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
