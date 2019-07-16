<nav id="searchBar">

    <ul class="list-unstyled components">

        <span id="industry_data_sec" class="data_sector active" style="display:none;">Industry</span>
        <a class="btn btn-primary" style="display:none;"></a>

        <li id="industry_overview" class="border_line_top border_line @if (Request::is('wdt')) {{'active'}} @endif"><a onclick="passIndustry('/wdt')">Industry Overview</a></li>
        <li class="border_line_top border_line @if (Request::is('wdt/industry-outlook')) {{'active'}} @endif"><a onclick="passIndustry('/wdt/industry-outlook')">Industry Outlook</a></li>
        <li id="recruitment_and_retention" class="border_line_top border_line @if (Request::is('wdt/recruitment-and-retention')) {{'active'}} @endif"><a onclick="passIndustry('/wdt/recruitment-and-retention')">Recruitment and Retention</a></li>
        <li id="migration" class="border_line_top border_line @if (Request::is('wdt/skilled-migration')) {{'active'}} @endif"><a onclick="passIndustry('/wdt/skilled-migration')">Skilled Migration</a></li>
        <li id="plans_and_projects" class="border_line_top border_line @if (Request::is('wdt/plans-and-projects')) {{'active'}} @endif"><a onclick="passIndustry('/wdt/plans-and-projects')">Plans & Major Projects</a></li>
        <li class="border_line_top border_line @if (Request::is('wdt/regulatory-environment')) {{'active'}} @endif"><a onclick="passIndustry('/wdt/regulatory-environment')">Regulatory Environment</a></li>
        <li id="skilling_sa" class="border_line_top border_line @if (Request::is('wdt/skilling-south-australia')) {{'active'}} @endif"><a onclick="passIndustry('/wdt/skilling-south-australia')">Skilling South Australia</a></li>
        <li id="action_and_strategies" class="border_line_top border_line @if (Request::is('wdt/actions-and-strategies')) {{'active'}} @endif"><a onclick="passIndustry('/wdt/actions-and-strategies')">Actions & Strategies</a></li>
        <li id="training_activity" class="border_line_top border_line @if (Request::is('wdt/training-activity')) {{'active'}} @endif"><a onclick="passIndustry('/wdt/training-activity')">Training Activity</a></li>
    </ul>

    <button type="button" id="close_search" class="btn btn-tasc-src btn-tasc btn-block">
        <i class="glyphicon glyphicon-remove"></i> <span>Close Navigation</span>
    </button>

    <div class="padding-bottom-md"></div>
</nav>