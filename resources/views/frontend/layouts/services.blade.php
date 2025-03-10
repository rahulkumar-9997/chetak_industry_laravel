<div class="sidebar-widget categories">
    <div class="widget-content">
        <!-- Services Category -->
        <ul class="services-categories">
            <li><a href="{{URL::to('/')}}">All Services</a></li>
           
            <li class="{{ Request::is('angle-boards-and-od-protectors') ? 'active' : '' }}">
                <a href="{{route('angle-boards-and-od-protectors')}}">Angle Boards and OD Protectors</a>
            </li>
            <li class="{{ Request::is('interleaving-paper') ? 'active' : '' }}">
                <a href="{{route('interleaving-paper')}}">Interleaving Paper</a>
            </li>
            <li class="{{ Request::is('stretch-film') ? 'active' : '' }}">
                <a href="stretch-film">Stretch Film</a>
            </li>                                    
            <li class="{{ Request::is('masking-film') ? 'active' : '' }}">
                <a href="{{route('masking-film')}}">Masking Film</a>
            </li>
            <li class="{{ Request::is('paper-surface-board') ? 'active' : '' }}">
                <a href="{{route('paper-surface-board')}}">Paper Surface Board</a>
            </li>
            <li class="{{ Request::is('pp-bubble-guard') ? 'active' : '' }}">
                <a href="{{route('pp-bubble-guard')}}">PP Bubble Guard</a>
            </li>
            <li class="{{ Request::is('mcr-sheet') ? 'active' : '' }}">
                <a href="{{route('mcr-sheet')}}">MCR Sheet</a>
            </li>
        </ul>
    </div>
</div>