<div class="vc_row wpb_row mb-0 vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="dt-sc-title with-two-border aligncenter"><h2>Notre team</h2></div>
                <div class="wpb_text_column wpb_content_element  vc_custom_1476695778051">
                    <div class="wpb_wrapper">
                        <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo</p>
                    </div>
                </div>
                @if(isset($teams))
                    <div class="vc_row wpb_row vc_inner vc_row-fluid team-content-overlay">
                        @foreach($teams as $team)
                        <div class="team-content-item wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="dt-sc-team type2 ">
                                        <div class="dt-sc-team-thumb">
                                            <img src="{{ secure_asset($team->getFirstMedia('main')->getUrl()) }}" alt="{{ $team->name }}" title="" class="attachment-full"  width="209" height="239">
                                            <div class="dt-sc-team-thumb-overlay"></div>
                                        </div>
                                        <div class="dt-sc-team-details">
                                            <h4>{{ $team->name }}</h4>
                                            <h5>{{ $team->translate(session()->get('locale'))->position ?? '' }}</h5>
                                            <p>{{ $team->email ?? '' }}</p>
                                        </div>
                                    </div>
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
