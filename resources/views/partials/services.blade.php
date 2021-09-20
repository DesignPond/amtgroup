<div class="vc_row mb-4 wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner " style=" text-align:center; ">
            <div class="wpb_wrapper">
                <div class="dt-sc-title with-two-border aligncenter">
                    <h2>Nos services</h2>
                </div>
                <div class="wpb_text_column wpb_content_element vc_custom_1476695612302">
                    <div class="wpb_wrapper">
                        <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo</p>
                    </div>
                </div>
                @if(isset($services))
                    <div class="vc_row wpb_row vc_inner vc_row-fluid team-content-overlay">
                        @foreach($services as $service)
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="dt-sc-icon-box dt-sc-icon-box-100 type3 dt-sc-rounded">
                                    <div class="icon-wrapper">
                                        <span><img src="https://2kshsc4aimaz13nsj91wgxce-wpengine.netdna-ssl.com/wp-content/uploads/2016/08/home3.jpg" class="attachment-full" alt="" loading="lazy" width="150" height="150"></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4>{{ ucfirst($service->translate(session()->get('locale'))->title) }}</h4>
                                        <p>{!! $service->translate(session()->get('locale'))->content !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
