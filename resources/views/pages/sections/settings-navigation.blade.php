<div class="col-sm-3 col-md-2 sidebar active" id="searchBar">
    <ul class="nav nav-sidebar" role="tablist">
        <li class="border_line border_line_top @if (Request::is('wdt-settings')) {{'active'}} @endif"><a href="/wdt-settings">Upload Excel</a></li>
        <li class="dropdown  border_line @if (Request::is('wdt-settings/skill-shortage/*')) {{'active'}} @endif">
            <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Skill Shortages<span class="caret"></span></a>
            <ul class="dropdown-menu" id="myTabDrop1-contents">
                <li class=""><a href="/wdt-settings/skill-shortage/more-info">More Info</a></li>
                <li class=""><a href="/wdt-settings/skill-shortage/about">about this data</a></li>
            </ul>
        </li>
        <li class="dropdown  border_line @if (Request::is('wdt-settings/skill-demand/*')) {{'active'}} @endif">
            <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Skill Demand<span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                <li class=""><a href="/wdt-settings/skill-demand/more-info">More Info</a></li>
                <li class=""><a href="/wdt-settings/skill-demand/about">about this data</a></li>
            </ul>
        </li>
        <li class="border_line @if (Request::is('wdt-settings/industry-outlook')) {{'active'}} @endif"><a href="/wdt-settings/industry-outlook">Industry Outlook</a></li>
        <li role="presentation" class="dropdown border_line @if (Request::is('wdt-settings/recruitment/*')) {{'active'}} @endif">
            <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Recruitment<span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                <li class=""><a href="/wdt-settings/recruitment/more-info">More Info</a></li>
                <li class=""><a href="/wdt-settings/recruitment/about">about this data</a></li>
            </ul>
        </li>
        <li role="presentation" class="dropdown border_line @if (Request::is('wdt-settings/retention/*')) {{'active'}} @endif">
            <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Retention<span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                <li class=""><a href="/wdt-settings/retention/more-info">More Info</a></li>
                <li class=""><a href="/wdt-settings/retention/about">about this data</a></li>
            </ul>
        </li>
        <li role="presentation" class="dropdown border_line @if (Request::is('wdt-settings/skilled-migration/*')) {{'active'}} @endif">
            <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Skilled Migration<span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                <li class=""><a href="/wdt-settings/skilled-migration/more-info">More Info</a></li>
                <li class=""><a href="/wdt-settings/skilled-migration/about">about this data</a></li>
            </ul>
        </li>
        <li class=" border_line @if (Request::is('wdt-settings/plans-and-projects/*')) {{'active'}} @endif"><a href="/wdt-settings/plans-and-projects/more-info">Plans & Major Projects</a></li>
        <li class=" border_line @if (Request::is('wdt-settings/regulatory-environment')) {{'active'}} @endif"><a href="/wdt-settings/regulatory-environment">Regulatory Environment</a></li>
        <li role="presentation" class="dropdown border_line @if (Request::is('wdt-settings/skilling-sa/*')) {{'active'}} @endif">
            <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Skilling SA<span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                <li class=""><a href="/wdt-settings/skilling-sa/more-info">More Info</a></li>
                <li class=""><a href="/wdt-settings/skilling-sa/about">about this data</a></li>
            </ul>
        </li>
        <li class=" border_line @if (Request::is('wdt-settings/actions-and-strategies/*')) {{'active'}} @endif"><a href="/wdt-settings/actions-and-strategies/more-info">Actions & Strategies</a></li>
    </ul>

    <button type="button" id="close_search" class="btn btn-tasc-src btn-tasc btn-block">
        <i class="glyphicon glyphicon-remove"></i> <span>Close Navigation</span>
    </button>
</div>