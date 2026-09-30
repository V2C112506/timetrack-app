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
<a aria-current="page" class="flex items-center px-space-md py-space-sm transition-colors bg-primary-container text-on-primary-container font-bold rounded-lg shadow-sm" data-path="support-tickets" href="#">Support Tickets</a>
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
<!-- Operations Header & Action Hub -->
<div class="flex flex-col xl:flex-row xl:items-center justify-between gap-space-md mb-space-lg">
<div>
<div class="flex items-center gap-space-xs mb-1">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-primary font-semibold">Tier-3 SaaS Operations</span>
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
<span class="font-label-sm text-label-sm text-on-surface-variant">Live Dispatch Queue</span>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface">Support Tickets &amp; Helpdesk Operations</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Manage enterprise tenant inquiries, GPS geofence calibration, and payment verifications.</p>
</div>
<!-- Filters & Action Bar -->
<div class="flex flex-wrap items-center gap-space-sm">
<div class="relative flex-grow sm:flex-grow-0">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-base">filter_list</span>
<select class="h-10 pl-9 pr-8 bg-surface-container-low text-on-surface font-label-md text-label-md rounded-full shadow-sm outline-none cursor-pointer appearance-none">
<option>All Priorities</option>
<option>Urgent (2)</option>
<option>High</option>
<option>Normal</option>
<option>Low</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-xs pointer-events-none">expand_more</span>
</div>
<div class="relative flex-grow sm:flex-grow-0">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-base">forum</span>
<select class="h-10 pl-9 pr-8 bg-surface-container-low text-on-surface font-label-md text-label-md rounded-full shadow-sm outline-none cursor-pointer appearance-none">
<option>All Channels</option>
<option>Viber Support</option>
<option>Web Portal</option>
<option>In-App Chat</option>
<option>Direct Email</option>
</select>
<span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-xs pointer-events-none">expand_more</span>
</div>
<div class="relative flex-1 sm:w-64">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-base">search</span>
<input class="w-full h-10 pl-9 pr-4 bg-surface-container-low text-on-surface font-body-sm text-body-sm rounded-full shadow-sm outline-none placeholder:text-on-surface-variant" placeholder="Search ticket, client, IMEI..." type="text"/>
</div>
<button class="h-10 px-5 bg-primary text-on-primary font-label-lg text-label-lg rounded-full shadow-md hover:bg-primary-container transition-all flex items-center gap-space-xs shrink-0" type="button">
<span class="material-symbols-outlined text-lg">add_circle</span>
<span>New Ticket</span>
</button>
</div>
</div>
<!-- Operational Metrics Bento -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md mb-space-lg">
<!-- Card 1 -->
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm relative overflow-hidden flex flex-col justify-between">
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Unresolved Queue</span>
<div class="w-8 h-8 rounded-full bg-error-container text-on-error-container flex items-center justify-center">
<span class="material-symbols-outlined text-lg">pending_actions</span>
</div>
</div>
<div>
<div class="flex items-baseline gap-space-xs">
<span class="font-display-time-mobile text-display-time-mobile text-on-surface font-bold">14</span>
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-semibold">2 Urgent SLA</span>
</div>
<div class="flex items-center gap-1.5 mt-space-xs text-error font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">emergency_home</span>
<span>Requires dispatch review</span>
</div>
</div>
<div class="mt-space-sm pt-space-xs">
<div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 68%;"></div>
</div>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm relative overflow-hidden flex flex-col justify-between">
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Avg First Response</span>
<div class="w-8 h-8 rounded-full bg-tertiary-container text-on-tertiary-container flex items-center justify-center">
<span class="material-symbols-outlined text-lg">timer</span>
</div>
</div>
<div>
<div class="flex items-baseline gap-space-xs">
<span class="font-display-time-mobile text-display-time-mobile text-on-surface font-bold">8.4</span>
<span class="font-label-lg text-label-lg text-on-surface-variant font-semibold">mins</span>
</div>
<div class="flex items-center gap-1.5 mt-space-xs text-tertiary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">trending_down</span>
<span>Goal &lt; 15 mins (44% faster)</span>
</div>
</div>
<div class="mt-space-sm pt-space-xs flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
<span>Target: 15m</span>
<span class="text-tertiary font-semibold">Optimal</span>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm relative overflow-hidden flex flex-col justify-between">
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Tenant CSAT Rating</span>
<div class="w-8 h-8 rounded-full bg-surface-container-high text-primary flex items-center justify-center">
<span class="material-symbols-outlined text-lg">star</span>
</div>
</div>
<div>
<div class="flex items-baseline gap-space-xs">
<span class="font-display-time-mobile text-display-time-mobile text-on-surface font-bold">4.9</span>
<span class="font-label-md text-label-md text-on-surface-variant">/ 5.0</span>
</div>
<div class="flex items-center gap-1.5 mt-space-xs text-tertiary font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">thumb_up</span>
<span>98.2% positive client feedback</span>
</div>
</div>
<div class="mt-space-sm pt-space-xs flex gap-1">
<div class="h-1 flex-1 rounded-full bg-tertiary"></div>
<div class="h-1 flex-1 rounded-full bg-tertiary"></div>
<div class="h-1 flex-1 rounded-full bg-tertiary"></div>
<div class="h-1 flex-1 rounded-full bg-tertiary"></div>
<div class="h-1 flex-1 rounded-full bg-tertiary/40"></div>
</div>
</div>
<!-- Card 4 -->
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm relative overflow-hidden flex flex-col justify-between">
<div class="flex items-center justify-between mb-space-sm">
<span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Resolved This Week</span>
<div class="w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center">
<span class="material-symbols-outlined text-lg">task_alt</span>
</div>
</div>
<div>
<div class="flex items-baseline gap-space-xs">
<span class="font-display-time-mobile text-display-time-mobile text-on-surface font-bold">86</span>
<span class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-medium">+14% vs prev week</span>
</div>
<div class="flex items-center gap-1.5 mt-space-xs text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">schedule</span>
<span>94% SLA compliance rate</span>
</div>
</div>
<div class="mt-space-sm pt-space-xs">
<svg class="w-full h-4 text-tertiary" preserveaspectratio="none" viewbox="0 0 100 20">
<path d="M0,18 Q20,10 40,14 T80,4 T100,2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2.5"></path>
</svg>
</div>
</div>
</div>
<!-- Main Helpdesk Split Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
<!-- Left Pane: Ticket Queue Lane (5 Cols) -->
<div class="lg:col-span-5 flex flex-col gap-space-md">
<!-- Queue Segment Switcher -->
<div class="bg-surface-container-low p-1.5 rounded-xl flex items-center justify-between shadow-sm">
<button class="flex-1 py-1.5 text-center font-label-md text-label-md rounded-lg bg-surface-container-lowest text-primary font-bold shadow-sm" type="button">
          Open (6)
        </button>
<button class="flex-1 py-1.5 text-center font-label-md text-label-md rounded-lg text-on-surface-variant hover:text-on-surface transition-colors" type="button">
          In Progress (5)
        </button>
<button class="flex-1 py-1.5 text-center font-label-md text-label-md rounded-lg text-on-surface-variant hover:text-on-surface transition-colors" type="button">
          Waiting (3)
        </button>
<button class="flex-1 py-1.5 text-center font-label-md text-label-md rounded-lg text-on-surface-variant hover:text-on-surface transition-colors" type="button">
          Resolved
        </button>
</div>
<!-- Ticket Queue Cards -->
<div class="flex flex-col gap-space-sm">
<!-- Ticket #TK-1082 (Active Focused Card) -->
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-md cursor-pointer transition-all hover:shadow-lg relative overflow-hidden" style="box-shadow: 0 0 0 2px #c64959, 0 8px 24px -4px rgba(15, 23, 42, 0.08);">
<div class="absolute left-0 top-0 bottom-0 w-1.5 bg-primary"></div>
<div class="flex items-center justify-between gap-space-xs mb-space-xs pl-1">
<div class="flex items-center gap-space-xs">
<span class="font-mono-metric text-mono-metric font-bold text-primary">#TK-1082</span>
<span class="px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-bold flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-error animate-pulse"></span> Urgent
              </span>
</div>
<div class="flex items-center gap-1 text-error font-label-sm text-label-sm font-semibold">
<span class="material-symbols-outlined text-sm">hourglass_top</span>
<span>12m SLA left</span>
</div>
</div>
<div class="pl-1 mb-space-sm">
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold line-clamp-1">Geofence GPS Radius Drift - Ortigas High-Rise Office</h2>
<div class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md mt-0.5">
<span class="font-semibold text-on-surface">Ortigas Logistics HQ</span>
<span>•</span>
<span>Maria Santos</span>
</div>
</div>
<div class="pl-1 flex flex-wrap items-center gap-space-xs justify-between pt-space-xs">
<div class="flex items-center gap-1.5">
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-primary">location_on</span> Geofence GPS
              </span>
<span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-xs">chat</span> Viber Direct
              </span>
</div>
<div class="flex items-center gap-space-xs">
<img class="w-6 h-6 rounded-full object-cover ring-2 ring-surface" data-alt="Corporate headshot of friendly customer support specialist Carlos wearing a professional headset with soft office background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCt15pyNZXWFZwQpVu9y-8nwq_mtlW2AP3i4kYYW1C_lhXvCaqQvkNVxbCRue8-05qHP5rqbZx55hKJObdpU_ZXuWk3AwlY3LUP2jOhUTZ_QCbMu_n-nx0gG1PlkPqoiz5YhDHfTKC04AbeFz1muSNqQyOJn1XLPefzrdlXTu2EKP6u4qxVYMKR_tjuL1ps6Bv4iLOvTznqUimJI9wDwipgrBOi1WtsccEf2td9vClBOPX2Z2MlTxctpQ"/>
<span class="font-label-sm text-label-sm text-on-surface-variant">Devon C.</span>
</div>
</div>
</div>
<!-- Ticket #TK-1079 -->
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm cursor-pointer transition-all hover:bg-surface-container-low hover:shadow-md relative overflow-hidden">
<div class="flex items-center justify-between gap-space-xs mb-space-xs">
<div class="flex items-center gap-space-xs">
<span class="font-mono-metric text-mono-metric font-semibold text-on-surface-variant">#TK-1079</span>
<span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">High</span>
</div>
<div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">schedule</span>
<span>45m left</span>
</div>
</div>
<div class="mb-space-sm">
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold line-clamp-1">Biometric Enrollment Failure on Android 14 Rugged Devices</h2>
<div class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md mt-0.5">
<span class="font-semibold text-on-surface">Metro Freight Cebu</span>
<span>•</span>
<span>Ronaldo Cruz</span>
</div>
</div>
<div class="flex flex-wrap items-center gap-space-xs justify-between pt-space-xs">
<div class="flex items-center gap-1.5">
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-primary">face</span> Biometric Match
              </span>
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-xs">devices</span> In-App Chat
              </span>
</div>
<div class="flex items-center gap-space-xs">
<div class="w-6 h-6 rounded-full bg-surface-container-high text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm font-bold">AL</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Anna L.</span>
</div>
</div>
</div>
<!-- Ticket #TK-1075 -->
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm cursor-pointer transition-all hover:bg-surface-container-low hover:shadow-md relative overflow-hidden">
<div class="flex items-center justify-between gap-space-xs mb-space-xs">
<div class="flex items-center gap-space-xs">
<span class="font-mono-metric text-mono-metric font-semibold text-on-surface-variant">#TK-1075</span>
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold">Normal</span>
</div>
<div class="flex items-center gap-1 text-tertiary font-label-sm text-label-sm font-medium">
<span class="material-symbols-outlined text-sm">done_all</span>
<span>SLA Met</span>
</div>
</div>
<div class="mb-space-sm">
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold line-clamp-1">GCash Enterprise Subscription Receipt &amp; BIR 2307 Request</h2>
<div class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md mt-0.5">
<span class="font-semibold text-on-surface">Sari-Sari Mart Chain Cebu</span>
<span>•</span>
<span>Elena Gomez</span>
</div>
</div>
<div class="flex flex-wrap items-center gap-space-xs justify-between pt-space-xs">
<div class="flex items-center gap-1.5">
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-primary">receipt_long</span> Invoicing / GCash
              </span>
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-xs">mail</span> Email
              </span>
</div>
<div class="flex items-center gap-space-xs">
<div class="w-6 h-6 rounded-full bg-surface-container-high text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm font-bold">DC</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Devon C.</span>
</div>
</div>
</div>
<!-- Ticket #TK-1068 -->
<div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm cursor-pointer transition-all hover:bg-surface-container-low hover:shadow-md relative overflow-hidden">
<div class="flex items-center justify-between gap-space-xs mb-space-xs">
<div class="flex items-center gap-space-xs">
<span class="font-mono-metric text-mono-metric font-semibold text-on-surface-variant">#TK-1068</span>
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold">Normal</span>
</div>
<div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-sm">schedule</span>
<span>2.5h left</span>
</div>
</div>
<div class="mb-space-sm">
<h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold line-clamp-1">Rotating Shift Scheduling Conflict Across Night Shifts</h2>
<div class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md mt-0.5">
<span class="font-semibold text-on-surface">Apex BPO Solutions Davao</span>
<span>•</span>
<span>Kenji Takahashi</span>
</div>
</div>
<div class="flex flex-wrap items-center gap-space-xs justify-between pt-space-xs">
<div class="flex items-center gap-1.5">
<span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-xs text-primary">calendar_month</span> Shift Scheduling
              </span>
<span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm flex items-center gap-1">
<span class="material-symbols-outlined text-xs">language</span> Web Portal
              </span>
</div>
<div class="flex items-center gap-space-xs">
<div class="w-6 h-6 rounded-full bg-surface-container-high text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm font-bold">MR</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">Mark R.</span>
</div>
</div>
</div>
</div>
</div>
<!-- Right Pane: Ticket Detail & Conversation View (7 Cols) -->
<div class="lg:col-span-7 flex flex-col gap-space-md">
<!-- Ticket Detail Card Container -->
<div class="bg-surface-container-lowest rounded-xl shadow-md overflow-hidden">
<!-- Header Banner & Quick Actions -->
<div class="p-space-md bg-surface-container-low flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-mono-metric text-mono-metric font-bold">
              1082
            </div>
<div>
<div class="flex items-center gap-space-xs">
<h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">#TK-1082</h2>
<span class="px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-bold">Urgent</span>
<span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm">Via Viber Bot</span>
</div>
<div class="text-on-surface-variant font-body-sm text-body-sm">Created Today at 10:14 AM • Assignee: Devon Campbell (Owner)</div>
</div>
</div>
<!-- Action Buttons Bar -->
<div class="flex flex-wrap items-center gap-space-xs">
<button class="h-9 px-3 bg-surface-container text-on-surface font-label-sm text-label-sm rounded-lg hover:bg-surface-container-high transition-colors flex items-center gap-1 shadow-sm" type="button">
<span class="material-symbols-outlined text-base">sync_alt</span>
<span>Change Status</span>
</button>
<button class="h-9 px-3 bg-surface-container-high text-primary font-label-sm text-label-sm rounded-lg hover:bg-secondary-fixed transition-colors flex items-center gap-1 shadow-sm" type="button">
<span class="material-symbols-outlined text-base">engineering</span>
<span>Escalate Eng</span>
</button>
<button class="h-9 px-4 bg-tertiary text-on-tertiary font-label-sm text-label-sm rounded-lg hover:bg-tertiary-container transition-colors flex items-center gap-1 shadow-sm" type="button">
<span class="material-symbols-outlined text-base">check_circle</span>
<span>Resolve Ticket</span>
</button>
</div>
</div>
<!-- Tenant Identity & Account Snapshot Strip -->
<div class="p-space-md bg-surface-container/40 flex flex-wrap items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<img class="w-12 h-12 rounded-full object-cover ring-2 ring-primary/30" data-alt="Portrait photo of Maria Santos, a Filipino logistics business owner in smart business attire inside a bright contemporary office" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6iavUSZ7UwKSsA5Qf04V3UPOS1IMUI9by7kWTfp7Yj0ymarivpFwcD7mZ0RSAOZeZhukR3nptEAN4_BZsjAFXFs8i0k5h_tbLAuwiDlx2dDnhqKYyNQ3aWa_CN1mCv54gRHxBFo7ByEu7hbSl7QHw_n_WyG7iB8gA6PQpYyWCDrRrz8i4-owyPl7jDiPz5H-Es7c22zpvooS5mw208RLmxQqwWORSGcLcT1kPFVtx8PZWXtbrXeZIRg"/>
<div>
<div class="flex items-center gap-2">
<span class="font-headline-sm text-headline-sm text-on-surface font-bold">Maria Santos</span>
<span class="px-2 py-0.5 rounded-full bg-tertiary-container text-on-tertiary font-label-sm text-label-sm">Business Pro ₱299</span>
</div>
<div class="text-on-surface-variant font-label-md text-label-md">Owner • Ortigas Logistics Operations • Pasig City, Metro Manila</div>
</div>
</div>
<div class="flex items-center gap-space-lg">
<div class="text-right">
<div class="font-mono-metric text-mono-metric font-bold text-on-surface">32 Staff</div>
<div class="font-label-sm text-label-sm text-on-surface-variant">Active Licenses</div>
</div>
<div class="text-right">
<div class="font-mono-metric text-mono-metric font-bold text-tertiary">Verified Active</div>
<div class="font-label-sm text-label-sm text-on-surface-variant">GCash Auto-Debit</div>
</div>
</div>
</div>
<!-- Issue Geolocation & Technical Telemetry Card -->
<div class="p-space-md">
<div class="p-space-md rounded-xl bg-surface-container-low flex flex-col md:flex-row gap-space-md items-center">
<!-- Simulated GPS Geofence Radar Preview -->
<div class="w-full md:w-48 h-32 rounded-lg bg-surface-container relative overflow-hidden flex items-center justify-center shrink-0">
<div class="absolute inset-0 bg-cover bg-center opacity-60" data-location="Ortigas Center, Pasig City, Philippines" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDj8HayUH2mXiQGebo1g8Z4DNJaE4ymIbaEhq9m3XWULDmse2wGUjjev7h57-GLoWQtWND2jKxksD5ebtEQn_jgiIvAeyk9DAnOipCNfCFkfNsX-0vEIUj9lh6yfDm-kshO18vInRN4fySFEw_rVabB-clRQZ5myAVliSszA55Kyas_3e9M5z0yxe3y4buGRc1lF46W4eIloTfYTtxYzlK3XmkaTva5Bw9NKByd2Jz5R2qsXBay_1TDzg')"></div>
<!-- Radius circle ripple -->
<div class="relative flex items-center justify-center">
<div class="w-20 h-20 rounded-full bg-primary/20 animate-ping absolute"></div>
<div class="w-16 h-16 rounded-full bg-primary/30 flex items-center justify-center">
<div class="w-4 h-4 rounded-full bg-primary shadow-md"></div>
</div>
</div>
<div class="absolute bottom-1 left-2 right-2 px-1.5 py-0.5 bg-surface/90 backdrop-blur-sm rounded text-center font-label-sm text-label-sm text-on-surface-variant">
                Ortigas Tower 2 (Floor 24)
              </div>
</div>
<!-- Telemetry Description -->
<div class="flex-1 text-on-surface">
<div class="flex items-center gap-1.5 text-error font-label-md text-label-md font-bold mb-1">
<span class="material-symbols-outlined text-base">signal_cellular_connected_no_internet_4_bar</span>
<span>High-Rise GPS Multipath Drift Detected (+42m error)</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                Client's 18 field riders on the 24th floor cannot punch in without triggering fake-location penalties. Current set geofence radius: <strong class="text-on-surface">35 meters</strong>. Recommended radius expansion: <strong class="text-on-surface">85 meters</strong> with WiFi BSSID pinning.
              </p>
<div class="flex items-center gap-space-sm mt-space-sm">
<button class="px-3 py-1 bg-surface-container-highest text-on-surface font-label-sm text-label-sm rounded-full hover:bg-secondary-fixed transition-colors" type="button">
                  One-Click Auto-Calibrate (85m)
                </button>
<button class="px-3 py-1 bg-surface-container-highest text-on-surface-variant font-label-sm text-label-sm rounded-full hover:text-on-surface transition-colors" type="button">
                  View Device Logs (Xiaomi 13T)
                </button>
</div>
</div>
</div>
</div>
<!-- Conversation Timeline -->
<div class="px-space-md pb-space-md flex flex-col gap-space-md">
<div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm">
<span class="h-px bg-surface-container-high flex-1 mr-space-sm"></span>
<span>Thread Started via Viber Support API • 10:14 AM</span>
<span class="h-px bg-surface-container-high flex-1 ml-space-sm"></span>
</div>
<!-- Customer Message -->
<div class="flex gap-space-sm items-start max-w-xl">
<img class="w-8 h-8 rounded-full object-cover shrink-0 mt-1" data-alt="Portrait thumbnail of Maria Santos smiling slightly in office lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2IQgWXZVhbm83EQuX2SkNrGAbE_tK2ITyP34GmPEBN0Wty5VMLHwHyfsVGObf61pYy7G9IugNA8oR5YXXtCpORt3rxPAItStKg2xBjXut6pEe3H83IuBtcT-Y5LTq3-3vKfKecSLPWxz26shZRrO79dJrYymWeAcNBQOlDSgB3-v3iZECYruWcnIjZWcLm-E_zv320Xz6iMuPWmIaMQiqfVLtCC89R0x5jlTRGSiSn3ERd6FLf15kHw"/>
<div class="flex flex-col">
<div class="flex items-baseline gap-space-xs mb-1">
<span class="font-label-md text-label-md font-semibold text-on-surface">Maria Santos</span>
<span class="font-label-sm text-label-sm text-on-surface-variant">10:14 AM</span>
</div>
<div class="p-space-md rounded-2xl rounded-tl-none bg-surface-container text-on-surface font-body-md text-body-md shadow-sm">
                Good morning support team! Our field dispatch riders arriving at our Ortigas high-rise hub (Floor 24) are complaining the TimeTrack app is refusing their clock-in punch. It shows "Outside Allowed Geofence by 38 meters" even while standing inside the lobby! Can you adjust our branch geofence boundary so they don't get marked late for today's payroll?
              </div>
</div>
</div>
<!-- System Audit Event -->
<div class="flex items-center gap-space-xs self-center px-space-md py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
<span class="material-symbols-outlined text-xs text-primary">smart_toy</span>
<span>Automated diagnostics: 4 device punches rejected at 14.5872°N, 121.0614°E</span>
</div>
<!-- Internal Agent / Super Admin Response -->
<div class="flex gap-space-sm items-start max-w-xl self-end flex-row-reverse">
<img alt="Devon Campbell" class="w-8 h-8 rounded-full object-cover shrink-0 mt-1 ring-1 ring-primary" src="https://lh3.googleusercontent.com/aida/AEtjO1XaCBK3w4MbyTDu4BNzinBTUC1BaSWGvH3pcRQpJeEAIj4XN5HfIxMlMkJeIU0sZpqBxe4PS-1rQ4xo_VFSM1cHTb7e7oKhKFp56ySKc0PhVWKb69U8aVAICvVkWavB4fjqp-I0ukClDi9vJmWxzFzF7J4j_uqI0i1O5SXNRoqf69eJOQV5LNgJugZxICc8YEdhlC7s27R8_NRGvBVbrNDk86YeILqJnnTM4XuZlwE2HBaSvk3AZpThIhEb"/>
<div class="flex flex-col items-end">
<div class="flex items-baseline gap-space-xs mb-1">
<span class="font-label-sm text-label-sm text-on-surface-variant">10:19 AM</span>
<span class="font-label-md text-label-md font-semibold text-primary">Devon Campbell (Super Admin)</span>
</div>
<div class="p-space-md rounded-2xl rounded-tr-none bg-primary text-on-primary font-body-md text-body-md shadow-sm">
                Hi Maria! Devon here from the TimeTrack platform desk. Concrete skyscrapers like those along F. Ortigas Jr. Road frequently cause GPS satellite signal reflection (multipath drift). I am currently calibrating your branch hub geofence radius from 35m to 85m and enabling WiFi BSSID verification for your floor's router.
              </div>
</div>
</div>
</div>
<!-- Agent Response Workspace -->
<div class="p-space-md bg-surface-container-low">
<!-- Canned Response Pills -->
<div class="flex items-center gap-space-xs mb-space-sm overflow-x-auto pb-1">
<span class="font-label-sm text-label-sm text-on-surface-variant font-semibold flex items-center gap-1 shrink-0">
<span class="material-symbols-outlined text-xs">bolt</span> Canned Answers:
            </span>
<button class="px-2.5 py-1 rounded-full bg-surface-container-lowest text-on-surface font-label-sm text-label-sm shadow-sm hover:bg-surface-container transition-colors shrink-0" type="button">
              GPS Drift FAQ
            </button>
<button class="px-2.5 py-1 rounded-full bg-surface-container-lowest text-on-surface font-label-sm text-label-sm shadow-sm hover:bg-surface-container transition-colors shrink-0" type="button">
              Extend Radius Guide
            </button>
<button class="px-2.5 py-1 rounded-full bg-surface-container-lowest text-on-surface font-label-sm text-label-sm shadow-sm hover:bg-surface-container transition-colors shrink-0" type="button">
              GCash Invoice Receipt
            </button>
<button class="px-2.5 py-1 rounded-full bg-surface-container-lowest text-on-surface font-label-sm text-label-sm shadow-sm hover:bg-surface-container transition-colors shrink-0" type="button">
              Biometric Retake Instructions
            </button>
</div>
<!-- Message Composer Area -->
<div class="bg-surface-container-lowest rounded-xl p-space-sm shadow-sm">
<textarea class="w-full bg-transparent border-0 outline-none text-on-surface font-body-md text-body-md placeholder:text-on-surface-variant resize-none" placeholder="Draft your response to Maria Santos (will sync instantly to tenant Viber &amp; In-App notification)..." rows="3"></textarea>
<div class="flex items-center justify-between pt-space-xs">
<div class="flex items-center gap-space-xs text-on-surface-variant">
<button class="w-8 h-8 rounded-full hover:bg-surface-container flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-base">attach_file</span>
</button>
<button class="w-8 h-8 rounded-full hover:bg-surface-container flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-base">map</span>
</button>
<button class="w-8 h-8 rounded-full hover:bg-surface-container flex items-center justify-center transition-colors" type="button">
<span class="material-symbols-outlined text-base">schedule_send</span>
</button>
<span class="text-xs font-label-sm text-label-sm ml-2 hidden sm:inline">Sending as <strong>Devon Campbell</strong> (Super Admin)</span>
</div>
<div class="flex items-center gap-space-xs">
<button class="h-9 px-3 text-on-surface-variant font-label-sm text-label-sm rounded-lg hover:bg-surface-container transition-colors" type="button">
                  Save Draft
                </button>
<button class="h-9 px-4 bg-primary text-on-primary font-label-sm text-label-sm rounded-lg hover:bg-primary-container transition-colors flex items-center gap-1 shadow-sm font-semibold" type="button">
<span>Send Response</span>
<span class="material-symbols-outlined text-base">send</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div></main>
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
