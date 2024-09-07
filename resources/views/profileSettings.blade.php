<div data-radix-popper-content-wrapper="" dir="ltr" id="profileDropdown" class="hidden"
    style="position: fixed; left: 0px; top: 0px; transform: translate(1662px, 65px); min-width: max-content; z-index: 300; --radix-popper-available-width: 240px; --radix-popper-available-height: 581.5px; --radix-popper-anchor-width: 146.390625px; --radix-popper-anchor-height: 56px; --radix-popper-transform-origin: 0% 0px;">
    <div data-side="bottom" data-align="start" role="menu" aria-orientation="vertical" data-state="open"
        data-radix-menu-content="" dir="ltr" id="radix-:ri:" aria-labelledby="radix-:rh:"
        class="rounded border-2 border-neutral-300 bg-neutral-100 p-1 shadow-2xl overflow-y-auto select-none w-60 h-fit"
        tabindex="-1" data-orientation="vertical"
        style="outline: none; z-index: 300; --radix-dropdown-menu-content-transform-origin: var(--radix-popper-transform-origin); --radix-dropdown-menu-content-available-width: var(--radix-popper-available-width); --radix-dropdown-menu-content-available-height: var(--radix-popper-available-height); --radix-dropdown-menu-trigger-width: var(--radix-popper-anchor-width); --radix-dropdown-menu-trigger-height: var(--radix-popper-anchor-height); opacity: 1; transform: none;">
        <div role="group">
            <div role="menuitem"
                class="hover:cursor-cool-clickable flex select-none items-center justify-between gap-2 rounded px-2 py-3 outline-none hover:bg-primary-300 focus:bg-primary-300 transition-colors"
                tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
                <div class="w-full h-full flex items-center gap-2">
                    <div
                        class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-8 h-8 min-w-[1.5rem] min-h-[1.5rem] border-1">
                        <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('assets/member_avatar_453.png') }}"
                            alt="Avatar" class="object-cover">
                    </div>
                    <div class="flex flex-col">
                        <h5 class="leading-3"> {{ auth()->user()->name }} {{ auth()->user()->subname }}</h5>
                        <p class="text-small"> {{ auth()->user()->login}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div role="group">
            <div role="separator" aria-orientation="horizontal"
                class="h-[1px] bg-neutral-300 m-1 rounded-full mx-auto w-[87%]"></div>
            <div role="menuitem"
                class="hover:cursor-cool-clickable flex select-none items-center justify-between gap-2 rounded px-2 py-3 outline-none hover:bg-primary-300 focus:bg-primary-300 transition-colors"
                tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
                <div class="flex gap-2 items-center"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="h-6" style="max-width: 50vw; max-height: 50vh;">
                        <g fill="none">
                            <path d="M0 0h24v24H0Z"></path>
                            <path class="stroke-2 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"
                                d="M13.91 10.09a2.7 2.7 0 1 1-3.82 3.82 2.7 2.7 0 0 1 3.82-3.82"></path>
                            <path class="stroke-2 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"
                                d="M5.25 12c0 .297.027.594.063.882l-1.588 1.242a.898.898 0 0 0-.224 1.156l1.412 2.443a.898.898 0 0 0 1.112.384l1.422-.571a.912.912 0 0 1 .846.099c.22.146.448.28.684.4.27.137.466.382.509.682l.217 1.513c.063.442.442.77.888.77h2.817a.897.897 0 0 0 .888-.77l.217-1.512a.918.918 0 0 1 .512-.683c.235-.118.462-.251.681-.396a.915.915 0 0 1 .85-.102l1.419.57a.899.899 0 0 0 1.112-.384l1.412-2.443a.898.898 0 0 0-.224-1.156l-1.588-1.242c.036-.288.063-.585.063-.882 0-.297-.027-.594-.063-.882l1.588-1.242a.898.898 0 0 0 .224-1.156l-1.412-2.443a.898.898 0 0 0-1.112-.384l-1.419.57a.918.918 0 0 1-.85-.102 6.597 6.597 0 0 0-.681-.396.918.918 0 0 1-.512-.683l-.216-1.512a.897.897 0 0 0-.888-.77h-2.817a.897.897 0 0 0-.888.77l-.218 1.514a.92.92 0 0 1-.509.682c-.236.12-.464.255-.684.4a.917.917 0 0 1-.847.098l-1.421-.571a.898.898 0 0 0-1.112.384L3.501 8.72a.898.898 0 0 0 .224 1.156l1.588 1.242A7.138 7.138 0 0 0 5.25 12Z">
                            </path>
                        </g>
                    </svg>
                    <h5>Settings</h5>
                </div>
            </div>
            <div role="menuitem"
                class="hover:cursor-cool-clickable flex select-none items-center justify-between gap-2 rounded px-2 py-3 outline-none hover:bg-primary-300 focus:bg-primary-300 transition-colors"
                tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
                <div class="flex gap-2 items-center"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="h-6" style="max-width: 50vw; max-height: 50vh;">
                        <g stroke-linecap="round" class="stroke-2 stroke-neutral-700" fill="none"
                            stroke-linejoin="round">
                            <path
                                d="M9.5 10.75h5a1 1 0 0 1 1 1V13a2.25 2.25 0 0 1-2.25 2.25h-2.5 0A2.25 2.25 0 0 1 8.5 13v-1.25h0a1 1 0 0 1 1-1ZM10.04 10.75V8.5M13.96 10.75V8.5">
                            </path>
                            <path
                                d="M16 20.051h0A8.994 8.994 0 1 0 3 12h0a9.348 9.348 0 0 0 2.744 6.624v0h0a6.983 6.983 0 0 0 4.928 2.036v0h0c.733 0 1.327-.595 1.328-1.328V15.25">
                            </path>
                        </g>
                        <path fill="none" d="M0 0h24v24H0z"></path>
                    </svg>
                    <h5>Integrations</h5>
                </div>
            </div>
        </div>
        <div role="group">
            <div role="separator" aria-orientation="horizontal"
                class="h-[1px] bg-neutral-300 m-1 rounded-full mx-auto w-[87%]"></div>
            <div role="menuitem"
                class="hover:cursor-cool-clickable flex select-none items-center justify-between gap-2 rounded px-2 py-3 outline-none hover:bg-primary-300 focus:bg-primary-300 transition-colors"
                tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
                <div class="flex gap-2 items-center"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="h-6 stroke-2" style="max-width: 50vw; max-height: 50vh;">
                        <g stroke-linecap="round" class="stroke-neutral-700" fill="none" stroke-linejoin="round">
                            <path
                                d="M20.793 9.524a2.023 2.023 0 1 1-2.861 2.86 2.023 2.023 0 0 1 2.86-2.86M14.203 5.912a3.115 3.115 0 1 1-4.406 4.406 3.115 3.115 0 0 1 4.406-4.406M6.068 9.524a2.023 2.023 0 1 1-2.86 2.86 2.023 2.023 0 0 1 2.86-2.86M23 19v-1.096a2.5 2.5 0 0 0-2.5-2.5h-.801M1 19v-1.096a2.5 2.5 0 0 1 2.5-2.5h.801M17.339 19v-1.601a3.5 3.5 0 0 0-3.5-3.5H10.16a3.5 3.5 0 0 0-3.5 3.5V19">
                            </path>
                        </g>
                        <path fill="none" d="M0 0h24v24H0Z"></path>
                    </svg>
                    <h5 class="">Invite team</h5>
                    <div class="px-2 py-1 bg-primary-400 rounded-xl flex items-center justify-center">
                        <p class="text-primary-600 text-small"><span class="font-bold">free</span></p>
                    </div>
                </div>
            </div>
            <div role="menuitem"
                class="hover:cursor-cool-clickable flex select-none items-center justify-between gap-2 rounded px-2 py-3 outline-none hover:bg-primary-300 focus:bg-primary-300 transition-colors"
                tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
                <div class="flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        class="h-6" style="max-width: 50vw; max-height: 50vh;">
                        <g fill="none" data-name="Layer 2">
                            <path class="stroke-2 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"
                                d="M17 3h1a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3h6"></path>
                            <path class="stroke-2 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"
                                d="M17 2.833V9a.5.5 0 0 1-.735.442L14.5 8.5l-1.765.94A.5.5 0 0 1 12 9V2.832A.833.833 0 0 1 12.833 2h3.334a.833.833 0 0 1 .833.833ZM7 3v18">
                            </path>
                            <path d="M0 0h24v24H0Z"></path>
                        </g>
                    </svg>
                    <h5>Product bible</h5>
                </div>
            </div>
        </div>
      
        <div role="group">
            <div role="separator" aria-orientation="horizontal"
                class="h-[1px] bg-neutral-300 m-1 rounded-full mx-auto w-[87%]"></div>
            <div role="menuitem" onclick="window.location.href='/product/integrations'"
                class="hover:cursor-cool-clickable flex select-none items-center justify-between gap-2 rounded px-2 py-3 outline-none hover:bg-primary-300 focus:bg-primary-300 transition-colors"
                tabindex="-1" data-orientation="vertical" data-radix-collection-item="">
                <div class="flex gap-2 items-center "><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6" style="max-width: 50vw; max-height: 50vh;">
                        <g stroke-linecap="round" class="stroke-2 stroke-danger-500" fill="none"
                            stroke-linejoin="round">
                            <path
                                d="M11 19.392V7.503c0-.69-.355-1.331-.94-1.696l-4-2.5C4.728 2.475 3 3.432 3 5.003v11.888c0 .69.355 1.331.94 1.696l4 2.5c1.332.833 3.06-.125 3.06-1.695ZM15 11h6M19 13l2-2-2-2M11 19h4a2 2 0 0 0 2-2v-1">
                            </path>
                            <path d="M17 6V5a2 2 0 0 0-2-2H5"></path>
                        </g>
                        <path fill="none" d="M24 24H0V0h24v24Z"></path>
                    </svg>
                    <h5 class="text-danger-500">Log out</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var profile = document.getElementById("profile")

    profile.addEventListener("click", () => {
        document.getElementById("profileDropdown").classList.toggle("hidden")
    })  
</script>