<div class="vc_row wpb_row vc_row-fluid iconbox-section">
    @if(isset($competences))
        @foreach($competences as $competence)
            <div class="wpb_animate_when_almost_visible wpb_left-to-right left-to-right wpb_column vc_column_container vc_col-sm-4 wpb_start_animation animated">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="dt-sc-icon-box type11">
                            <div class="icon-wrapper"><span class="fas fa-{{ $competence->icon }}"> </span></div>
                            <div class="icon-content">
                                <h4>{{ $competence->translate(session()->get('locale'))->title }}</h4>
                                <p>{!! $competence->translate(session()->get('locale'))->content !!}</p>
                                <p><a href="{{ secure_url($competence->link) }}" title="" class="dt-sc-button small rounded-border fadeIn " style="color:#86898b;font-size:18;">En savoir plus </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
