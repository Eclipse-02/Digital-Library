@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="card card-xxl-stretch">
    <!--begin::Header-->
    <div class="card-header align-items-center border-0 mt-4">
        <h3 class="card-title align-items-start flex-column">
            <span class="fw-bolder mb-2 text-dark">Activities</span>
            <span class="text-muted fw-bold fs-7">890,344 Sales</span>
        </h3>
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--begin::Menu 1-->
            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61484bf44f851">
                <!--begin::Header-->
                <div class="px-7 py-5">
                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                </div>
                <!--end::Header-->
                <!--begin::Menu separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Menu separator-->
                <!--begin::Form-->
                <div class="px-7 py-5">
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Status:</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61484bf44f851" data-allow-clear="true">
                                <option></option>
                                <option value="1">Approved</option>
                                <option value="2">Pending</option>
                                <option value="2">In Process</option>
                                <option value="2">Rejected</option>
                            </select>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Member Type:</label>
                        <!--end::Label-->
                        <!--begin::Options-->
                        <div class="d-flex">
                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" value="1" />
                                <span class="form-check-label">Author</span>
                            </label>
                            <!--end::Options-->
                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                <span class="form-check-label">Customer</span>
                            </label>
                            <!--end::Options-->
                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Notifications:</label>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                            <label class="form-check-label">Enabled</label>
                        </div>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Menu 1-->
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-5">
        <!--begin::Timeline-->
        <div class="timeline-label">
            <!--begin::Item-->
            <div class="timeline-item">
                <!--begin::Label-->
                <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                <!--end::Label-->
                <!--begin::Badge-->
                <div class="timeline-badge">
                    <i class="fa fa-genderless text-warning fs-1"></i>
                </div>
                <!--end::Badge-->
                <!--begin::Text-->
                <div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
                <!--end::Text-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="timeline-item">
                <!--begin::Label-->
                <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                <!--end::Label-->
                <!--begin::Badge-->
                <div class="timeline-badge">
                    <i class="fa fa-genderless text-success fs-1"></i>
                </div>
                <!--end::Badge-->
                <!--begin::Content-->
                <div class="timeline-content d-flex">
                    <span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="timeline-item">
                <!--begin::Label-->
                <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                <!--end::Label-->
                <!--begin::Badge-->
                <div class="timeline-badge">
                    <i class="fa fa-genderless text-danger fs-1"></i>
                </div>
                <!--end::Badge-->
                <!--begin::Desc-->
                <div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
                <a href="#" class="text-primary">USD 700</a>. to ESL</div>
                <!--end::Desc-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="timeline-item">
                <!--begin::Label-->
                <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                <!--end::Label-->
                <!--begin::Badge-->
                <div class="timeline-badge">
                    <i class="fa fa-genderless text-primary fs-1"></i>
                </div>
                <!--end::Badge-->
                <!--begin::Text-->
                <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                <!--end::Text-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="timeline-item">
                <!--begin::Label-->
                <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                <!--end::Label-->
                <!--begin::Badge-->
                <div class="timeline-badge">
                    <i class="fa fa-genderless text-danger fs-1"></i>
                </div>
                <!--end::Badge-->
                <!--begin::Desc-->
                <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                <a href="#" class="text-primary">#XF-2356</a>.</div>
                <!--end::Desc-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="timeline-item">
                <!--begin::Label-->
                <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                <!--end::Label-->
                <!--begin::Badge-->
                <div class="timeline-badge">
                    <i class="fa fa-genderless text-primary fs-1"></i>
                </div>
                <!--end::Badge-->
                <!--begin::Text-->
                <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                <!--end::Text-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="timeline-item">
                <!--begin::Label-->
                <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                <!--end::Label-->
                <!--begin::Badge-->
                <div class="timeline-badge">
                    <i class="fa fa-genderless text-danger fs-1"></i>
                </div>
                <!--end::Badge-->
                <!--begin::Desc-->
                <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                <a href="#" class="text-primary">#XF-2356</a>.</div>
                <!--end::Desc-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="timeline-item">
                <!--begin::Label-->
                <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                <!--end::Label-->
                <!--begin::Badge-->
                <div class="timeline-badge">
                    <i class="fa fa-genderless text-success fs-1"></i>
                </div>
                <!--end::Badge-->
                <!--begin::Text-->
                <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
                <!--end::Text-->
            </div>
            <!--end::Item-->
        </div>
        <!--end::Timeline-->
    </div>
    <!--end: Card Body-->
</div>
@endsection
