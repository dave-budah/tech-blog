<footer class="relative z-10 py-8 border-t border-gray-3">
    <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="flex flex-wrap items-center justify-center flex-col gap-4 lg:gap-0 lg:flex-row lg:justify-between">
            <div>
                <p class="text-custom-sm">&copy; {{ date("Y") }} Selvigtech. All rights reserved</p>
            </div>
            <div>
                <ul class="flex flex-wrap items-center gap-2.5">
                    <li>
                        <a href="{{ route('terms.show') }}" target="_blank"
                           class="group leading-none flex text-custom-sm ease-in duration-200 hover:text-dark">
                            <span
                                class="bg-gradient-to-r from-dark to-dark bg-[length:0px_1px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_1px]">Privacy</span>
                        </a>
                    </li>
                    <li>
                        <span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
                    </li>
                    <li>
                        <a target="_blank" href="{{ route('policy.show') }}"
                           class="group leading-none flex text-custom-sm ease-in duration-200 hover:text-dark">
                            <span
                                class="bg-gradient-to-r from-dark to-dark bg-[length:0px_1px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_1px]">Terms</span>
                        </a>
                    </li>
                    <li>
                        <span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
                    </li>
                    <li>
                        <a href="{{ route('home') }}"
                           class="group leading-none flex text-custom-sm ease-in duration-200 hover:text-dark">
                            <span
                                class="bg-gradient-to-r from-dark to-dark bg-[length:0px_1px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_1px]">Contact</span>
                        </a>
                    </li>
                    <li>
                        <span class="flex w-[3px] h-[3px] rounded-full bg-dark-2"></span>
                    </li>
                    <li>
                        <a href="{{ route('register') }}"
                           class="group leading-none flex text-custom-sm ease-in duration-200 hover:text-dark">
                            <span
                                class="bg-gradient-to-r from-dark to-dark bg-[length:0px_1px] bg-left-bottom bg-no-repeat transition-[background-size] duration-500 hover:bg-[length:100%_3px] group-hover:bg-[length:100%_1px]">Contribute</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <div class="flex items-center gap-3">
                    <p class="font-medium text-custom-sm text-dark">Follow Me:</p>

                    <div class="flex items-center gap-1.5">
                        <a id="facebookFooterBtn" aria-label="facebook social link" href="https://www.facebook.com/profile.php?id=100089976131524" target="_blank"
                           class="flex items-center justify-center w-7.5 h-7.5 rounded-full hover:bg-gray-2 lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
                            <svg class="fill-current" width="19" height="18" viewBox="0 0 19 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.4 8.58585V6.07664C10.4 5.10529 11.2059 4.31785 12.2 4.31785H14V1.67966L11.5565 1.50912C9.47255 1.36368 7.7 2.97636 7.7 5.01777V8.58585H5V11.224H7.7V16.5H10.4V11.224H13.1L14 8.58585H10.4Z"
                                    fill=""></path>
                            </svg>
                        </a>
                        <a id="twitterFooterBtn" aria-label="twitter social link" href="https://x.com/_d4vie" target="_blank"
                           class="flex items-center justify-center w-7.5 h-7.5 rounded-full hover:bg-gray-2 lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
                            <svg class="fill-current" width="19" height="18" viewBox="0 0 19 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_739_364)">
                                    <path
                                        d="M16.2781 4.30313L17.3469 2.95313C17.6562 2.5875 17.7406 2.30625 17.7688 2.16562C16.925 2.67188 16.1375 2.84063 15.6312 2.84063H15.4344L15.3219 2.72813C14.6469 2.1375 13.8031 1.82812 12.9031 1.82812C10.9344 1.82812 9.3875 3.45938 9.3875 5.34375C9.3875 5.45625 9.3875 5.625 9.41563 5.7375L9.5 6.3L8.90938 6.27188C5.30937 6.15938 2.35625 3.06563 1.87813 2.53125C1.09063 3.9375 1.54063 5.2875 2.01875 6.13125L2.975 7.70625L1.45625 6.8625C1.48438 8.04375 1.93437 8.97188 2.80625 9.64688L3.56562 10.2094L2.80625 10.5188C3.28437 11.9531 4.35313 12.5438 5.14062 12.7688L6.18125 13.05L5.19688 13.725C3.62188 14.85 1.65312 14.7656 0.78125 14.6813C2.55313 15.9188 4.6625 16.2 6.125 16.2C7.22188 16.2 8.0375 16.0875 8.23438 16.0031C16.1094 14.1469 16.475 7.11563 16.475 5.70938V5.5125L16.6438 5.4C17.6 4.5 17.9937 4.02188 18.2188 3.74063C18.1344 3.76875 18.0219 3.825 17.9094 3.85313L16.2781 4.30313Z"
                                        fill=""></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_739_364">
                                        <rect width="18" height="18" fill="white" transform="translate(0.5)"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <a id="linkedinFooterBtn" aria-label="linkedin social link"
                           href="https://www.linkedin.com/in/dave-budah/" target="_blank"
                           class="flex items-center justify-center w-7.5 h-7.5 rounded-full hover:bg-gray-2 lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
                            <svg class="fill-current" width="19" height="18" viewBox="0 0 19 18" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.50004 3.50068C5.49976 4.11141 5.12924 4.661 4.56318 4.89028C3.99713 5.11957 3.34858 4.98277 2.92335 4.54439C2.49812 4.10601 2.38114 3.45359 2.62755 2.89478C2.87397 2.33597 3.43458 1.98236 4.04504 2.00068C4.85584 2.02502 5.5004 2.68951 5.50004 3.50068ZM5.54504 6.11068H2.54504V15.5007H5.54504V6.11068ZM10.2851 6.11068H7.30004V15.5007H10.2551V10.5732C10.2551 7.82816 13.8326 7.57316 13.8326 10.5732V15.5007H16.7951V9.55316C16.7951 4.92568 11.5001 5.09818 10.2551 7.37066L10.2851 6.11068Z"
                                    fill=""></path>
                            </svg>
                        </a>
                        <a id="instagramFooterBtn" aria-label="pinterest social link" href="#"
                           class="flex items-center justify-center w-7.5 h-7.5 rounded-full hover:bg-gray-2 lg:transition-all lg:ease-linear lg:duration-300 hover:text-dark">
                            <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.99967 6.45831C8.04367 6.45831 6.45801 8.04397 6.45801 9.99998C6.45801 11.956 8.04367 13.5416 9.99967 13.5416C11.9557 13.5416 13.5413 11.956 13.5413 9.99998C13.5413 8.04397 11.9557 6.45831 9.99967 6.45831Z"
                                    fill/>
                                <path
                                    d="M1.66699 5.83335C1.66699 3.53217 3.53248 1.66669 5.83366 1.66669H14.167C16.4682 1.66669 18.3337 3.53217 18.3337 5.83335V14.1667C18.3337 16.4679 16.4682 18.3334 14.167 18.3334H5.83366C3.53248 18.3334 1.66699 16.4679 1.66699 14.1667V5.83335ZM5.20866 10C5.20866 12.6464 7.35396 14.7917 10.0003 14.7917C12.6467 14.7917 14.792 12.6464 14.792 10C14.792 7.35365 12.6467 5.20835 10.0003 5.20835C7.35396 5.20835 5.20866 7.35365 5.20866 10ZM15.0003 5.83335C15.4606 5.83335 15.8337 5.46025 15.8337 5.00002C15.8337 4.53979 15.4606 4.16669 15.0003 4.16669C14.5401 4.16669 14.167 4.53979 14.167 5.00002C14.167 5.46025 14.5401 5.83335 15.0003 5.83335Z"
                                    fill/>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
