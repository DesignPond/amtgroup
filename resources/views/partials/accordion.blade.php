<!-- Accordion -->
<div class="accordion" id="accordion_{{ $team->id }}">
	 @if(isset($team->translate(session()->get('locale'))->publications) && $team->translate(session()->get('locale'))->publications && !empty($team->translate(session()->get('locale'))->publications))
	    <!-- Card -->
	    <div class="card">
	        <!-- Header -->
	        <div class="card-header" id="card-01-header">
	            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#card-01-collapse_{{ $team->id }}" aria-expanded="true" aria-controls="collapseOne">
	               <i class="fal fa-book"></i> &nbsp;@lang('team.publications')
	            </button>
	        </div>
	        <div id="card-01-collapse_{{ $team->id }}" class="collapse" aria-labelledby="card-01-header" data-parent="#accordion_{{ $team->id }}">
	            <div class="card-body accordion-card">{!! $team->translate(session()->get('locale'))->publications !!}</div>
	        </div>
	        <!-- /Collapse -->
	    </div>
    @endif
    <!-- /Card -->
    @if(isset($team->translate(session()->get('locale'))->interventions) && $team->translate(session()->get('locale'))->interventions && !empty($team->translate(session()->get('locale'))->interventions))
    <!-- Card -->
    <div class="card">
        <!-- Header -->
        <div class="card-header" id="card-02-header">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#card-02-collapse_{{ $team->id }}" aria-expanded="true" aria-controls="collapseOne">
                <i class="fal fa-presentation"></i> &nbsp;@lang('team.interventions')
            </button>
        </div>
        <div id="card-02-collapse_{{ $team->id }}" class="collapse" aria-labelledby="card-02-header" data-parent="#accordion_{{ $team->id }}">
            <div class="card-body accordion-card">{!! $team->translate(session()->get('locale'))->interventions !!}</div>
        </div>
        <!-- /Collapse -->
    </div>
    @endif
</div>
<!-- /Accordion -->
