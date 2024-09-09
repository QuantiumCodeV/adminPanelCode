<div data-radix-popper-content-wrapper="" dir="ltr" id="profileDropdown" class="hidden"
    style="position: fixed; right: 0px; top: 0px; transform: translate(0, 65px); min-width: max-content; z-index: 300; --radix-popper-available-width: 240px; --radix-popper-available-height: 581.5px; --radix-popper-anchor-width: 146.390625px; --radix-popper-anchor-height: 56px; --radix-popper-transform-origin: 100% 0px;">
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
            <div role="menuitem" onclick="window.location.href='/product/integrations'"
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
            <div role="menuitem" onclick="window.location.href='/spaces/522/friends'"
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
                    <h5 class="">Invite friends</h5>
                    <div class="px-2 py-1 bg-primary-400 rounded-xl flex items-center justify-center">
                        <p class="text-primary-600 text-small"><span class="font-bold">free</span></p>
                    </div>
                </div>
            </div>
            <div role="menuitem" onclick="window.location.href='{{  route('user.logout')  }}'"
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
            <div role="menuitem"
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
<div class="focus:outline-none rounded m-auto fixed inset-x-0 inset-y-0 flex items-center absolute bg-neutral-100 overflow-hidden min-w-[30rem] max-w-[80rem] h-[90%] rounded-2xl p-0"
    role="dialog" id="radix-:rs:" aria-describedby="radix-:ru:" aria-labelledby="radix-:rt:" data-state="open"
    tabindex="-1" style="z-index: 200; opacity: 1; transform: none; pointer-events: auto;">
    <div class="w-full h-full flex">
        <div class=" w-1/4 min-w-[13rem] max-w-[13rem] overflow-y-auto p-4">
            <div dir="ltr" data-orientation="vertical" class="relative h-fit select-none w-full">
                <div role="tablist" aria-orientation="vertical" class="rounded flex flex-col w-full gap-1" tabindex="0"
                    data-orientation="vertical" style="outline: none;">
                    <div class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:cursor-cool-clickable disabled:cursor-cool-normal w-full px-2 py-3 flex items-center gap-2"
                        type="button" role="tab" aria-selected="true" aria-controls="radix-:rv:-content-personal"
                        data-state="active" id="radix-:rv:-trigger-personal" tabindex="-1" data-orientation="vertical"
                        data-radix-collection-item=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-6" style="max-width: 50vw; max-height: 50vh;">
                            <rect width="8" height="8" x="8" y="3" fill="none" class="stroke-1.5 stroke-neutral-700"
                                stroke-linecap="round" stroke-linejoin="round" rx="4"></rect>
                            <path fill="none" class="stroke-1.5 stroke-neutral-700" stroke-linecap="round"
                                stroke-linejoin="round" d="M20 21v-2.429a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4V21"></path>
                        </svg>
                        <h5>Personal</h5>
                    </div>
                    <div class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-full px-2 py-3 flex items-center gap-2"
                        type="button" role="tab" aria-selected="false" aria-controls="radix-:rv:-content-organization"
                        data-state="inactive" id="radix-:rv:-trigger-organization" tabindex="-1"
                        data-orientation="vertical" data-radix-collection-item=""><svg viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" class="h-6" style="max-width: 50vw; max-height: 50vh;">
                            <g stroke-linecap="round" class="stroke-1.5 stroke-neutral-700" fill="none"
                                stroke-linejoin="round">
                                <path
                                    d="M21 21V4.287h0a1.286 1.286 0 0 0-1.737-1.2l-6.429 2.407h0c-.503.188-.835.67-.834 1.206V21M6.375 5.25h2.25c.621 0 1.125.504 1.125 1.125v2.25h-4.5v-2.25h0c0-.621.504-1.125 1.125-1.125ZM7.5 3v2.25">
                                </path>
                                <path
                                    d="M3 21V9.75h0c0-.621.504-1.125 1.125-1.125h6.75A1.125 1.125 0 0 1 12 9.75V21M5.81 15.38h3.38M5.81 15.38h3.38M5.81 12h3.38M7.5 19.31V21M22 21H2M15 9.06V17M18 9.06V17">
                                </path>
                            </g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                        </svg>
                        <h5>Organization</h5>
                    </div>
                    <div class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-full px-2 py-3 flex items-center gap-2"
                        type="button" role="tab" aria-selected="false" aria-controls="radix-:rv:-content-ai"
                        data-state="inactive" id="radix-:rv:-trigger-ai" tabindex="-1" data-orientation="vertical"
                        data-radix-collection-item=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                            class="h-6 w-6" fill="none" style="max-width: 50vw; max-height: 50vh;">
                            <path class="stroke-1.5 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"
                                d="m17.074 4.92.66-.66M17.752 13.193l-.697-.706M9.495 4.92l-.66-.66"></path>
                            <path class="stroke-1.5 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"
                                d="m3.852 19.438-1.294-1.296a.917.917 0 0 1 0-1.297l8.779-8.782a.916.916 0 0 1 1.296 0l1.294 1.295a.917.917 0 0 1 0 1.297l-8.779 8.783a.916.916 0 0 1-1.296 0Z"
                                clip-rule="evenodd"></path>
                            <path class="stroke-1.5 stroke-neutral-700" stroke-linecap="round" stroke-linejoin="round"
                                d="M12.102 12.485 9.508 9.9M13.279 3.226v-.935M18.773 8.715h.935"></path>
                        </svg>
                        <h5>AI mode</h5>
                    </div>
                    <div class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-full px-2 py-3 flex items-center gap-2"
                        type="button" role="tab" aria-selected="false" aria-controls="radix-:rv:-content-integrations"
                        data-state="inactive" id="radix-:rv:-trigger-integrations" tabindex="-1"
                        data-orientation="vertical" data-radix-collection-item=""><svg viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" class="h-6" style="max-width: 50vw; max-height: 50vh;">
                            <g stroke-linecap="round" class="stroke-1.5 stroke-neutral-700" fill="none"
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
                    <div class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-full px-2 py-3 flex items-center gap-2"
                        type="button" role="tab" aria-selected="false" aria-controls="radix-:rv:-content-usage"
                        data-state="inactive" id="radix-:rv:-trigger-usage" tabindex="-1" data-orientation="vertical"
                        data-radix-collection-item=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-6" style="max-width: 50vw; max-height: 50vh;">
                            <g fill="none">
                                <path d="M24 0v24H0V0h24Z"></path>
                                <path class="stroke-1.5 stroke-neutral-700" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M9.167 20.5H4.444a.944.944 0 0 1-.944-.944v-3.778c0-.522.423-.944.944-.944h4.722M14.833 4.444V20.5h4.722a.944.944 0 0 0 .944-.944V4.444a.944.944 0 0 0-.944-.944h-3.778a.944.944 0 0 0-.944.944Z">
                                </path>
                                <path class="stroke-1.5 stroke-neutral-700" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M14.833 20.5H9.166V10.111c0-.522.423-.944.944-.944h4.722"></path>
                            </g>
                        </svg>
                        <h5>Usage &amp; Plans</h5>
                    </div>
                    <div class="px-3 py-2 rounded border-opacity-0 flex items-center z-10 hover:bg-neutral-100 hover:transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal w-full px-2 py-3 flex items-center gap-2"
                        type="button" role="tab" aria-selected="false" aria-controls="radix-:rv:-content-billing"
                        data-state="inactive" id="radix-:rv:-trigger-billing" tabindex="-1" data-orientation="vertical"
                        data-radix-collection-item=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            class="h-6" style="max-width: 50vw; max-height: 50vh;">
                            <g fill="none" class="stroke-1.5 stroke-neutral-700" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect>
                                <path d="M2 9h20"></path>
                                <path d="M5 13h1"></path>
                                <path d="M5 15h1"></path>
                            </g>
                            <path fill="none" d="M0 0h24v24H0Z"></path>
                        </svg>
                        <h5>Billing</h5>
                    </div>
                </div>
                <div class="absolute top-0 left-0 rounded bg-neutral-200 border-1 border-neutral-400"
                    style="width: 171px; height: 48px; transform: none;"></div>
            </div>
        </div>
        <section class="w-full flex flex-col gap-4  overflow-y-auto">
            <div class="h-full w-full overflow-y-auto">
                <div class="h-full w-full px-10 py-5">
                    <section class="flex flex-col gap-2 items-start my-5">
                        <div class="flex gap-4 items-center mb-4">
                            <div
                                class="rounded-full border-neutral-700 relative overflow-hidden flex items-center justify-center bg-primary-500 relative w-16 h-16 min-w-[2.25rem] min-h-[2.25rem] border-1">
                                <img src="https://d1uycn32xluru6.cloudfront.net/520/members/544/member_avatar_544.png?Expires=1725985785&amp;Signature=aDEVTrXVLtdbIChaBkkU~1Chqzn~Pjclnh6CEZnorHfNs6vidD9WfhX9dLXwLfzKOR-1V6qlOwCxULXaTScHtX-z2SeU0uBly96o8fvGoGGL7a5kxu05RjFjXjelaEwxZkU85nLjnUIJmqI7HsoV98S5D2Y0f0BMsf6BmRLs-6NQAYcDGCyyUnjhJZbD30MOaz0p2PwDwEsndQhkL9NSCJhVeFNSkISN1oft5jJw7M68kM6LmkkuD4GuwCfELWCsYXbQaGgFkFYMvfRh~TR1jaNKwgZWVEGBMGBcOeS8~2sXYJ3z2noqjZUzgDCZyBlyDiKOqLc5BWPz2kSi3fGMGQ__&amp;Key-Pair-Id=33a3e536-7d0d-4153-87be-3c1470b0c694"
                                    alt="Avatar" class="object-cover">
                            </div><button type="button"
                                class="flex items-center justify-center gap-2 rounded font-medium leading-4 whitespace-nowrap overflow-hidden text-overflow-ellipsis w-auto min-w-0 min-h-0 select-none px-2 py-1 bg-neutral-200 border-1 border-neutral-400 opacity-100"
                                tabindex="0" style="transform: none; transform-origin: 50% 50% 0px;">
                                <h5 class="text-neutral-600">Change picture</h5>
                            </button>
                        </div>
                        <h3>Name</h3>
                        <div class="w-full flex gap-4 items-center">
                            <div class="flex flex-col gap-1">
                                <div style="transform-origin: center center; perspective: 500px; transform: none;">
                                    <input
                                        class="px-2 py-2 rounded transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal bg-neutral-50 border-1 border-neutral-400 w-60 p focus:outline-primary-500 overflow-hidden text-ellipsis-clip"
                                        type="text" placeholder="First name" value="23122121">
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <div style="transform-origin: center center; perspective: 500px; transform: none;">
                                    <input
                                        class="px-2 py-2 rounded transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal bg-neutral-50 border-1 border-neutral-400 w-60 p focus:outline-primary-500 overflow-hidden text-ellipsis-clip"
                                        type="text" placeholder="Last name" value="12212112">
                                </div>
                            </div>
                        </div>
                        <p class="text-small">This is the name all your team members will see. Choose it wisely.</p>
                        <h3 class="mt-4">Login</h3>
                        <div class="flex flex-col gap-2">
                            <div class="relative">
                                <div
                                    class="absolute right-[10px] top-[9px] px-2 py-1 rounded z-10 bg-grainy-texture bg-success-200 bg">
                                    <h5 class="text-xs text-success-500">Verified</h5>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <div style="transform-origin: center center; perspective: 500px; transform: none;">
                                        <input
                                            class="px-2 py-2 rounded transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal bg-neutral-50 border-1 border-neutral-400 w-[25rem] p focus:outline-primary-500 overflow-hidden text-ellipsis-clip"
                                            type="email" placeholder="example@gmail.com" id="email" name="email"
                                            value="goyavi9994@coloruz.com">
                                    </div>
                                </div>
                            </div>
                            <p role="alert" class="text-danger-500 pt-1 pl-1 text-transparent"> </p>
                            <div class="relative">
                                <div class="absolute right-0 -top-[2.5px]"><button
                                        class="flex items-center font-bold rounded text-base font-bold px-3 py-3"
                                        tabindex="0" style="transform: none; transform-origin: 50% 50% 0px;">
                                        <h5>Change password</h5>
                                    </button></div>
                                <div class="flex flex-col gap-1">
                                    <div style="transform-origin: center center; perspective: 500px; transform: none;">
                                        <input
                                            class="px-2 py-2 rounded transition-colors hover:cursor-cool-clickable disabled:cursor-cool-normal bg-neutral-50 border-1 border-neutral-400 w-[25rem] p focus:outline-primary-500 overflow-hidden text-ellipsis-clip opacity-70"
                                            disabled="" type="password" placeholder="Password" value="password123">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-16 flex flex-col gap-2 pb-20 w-full">
                            <h3>Danger zone</h3>
                            <section
                                class="bg-danger-100 py-2 px-4 rounded flex items-center justify-center gap-2 w-fit hover:cursor-cool-clickable disabled:cursor-cool-normal">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-5"
                                    style="max-width: 50vw; max-height: 50vh;">
                                    <g fill="none">
                                        <path d="M0 0h24v24H0Z"></path>
                                        <path class="stroke-2 stroke-danger-500" stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="m14.83 9.17-5.66 5.66M14.83 14.83 9.17 9.17M12 21v0a9 9 0 0 1-9-9v0a9 9 0 0 1 9-9v0a9 9 0 0 1 9 9v0a9 9 0 0 1-9 9Z">
                                        </path>
                                    </g>
                                </svg>
                                <h5 class="text-danger-500">Delete my account - All your data will be lost for ever</h5>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    var profile = document.getElementById("profile")

    profile.addEventListener("click", () => {
        document.getElementById("profileDropdown").classList.toggle("hidden")
    })  
</script>