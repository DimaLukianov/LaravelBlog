{!! link_to_route('posts.index', 'Home') !!} |

@unless(\Illuminate\Support\Facades\Auth::check())

    {!! link_to('/auth/register', 'Registration') !!} |

    {!! link_to('/auth/login', 'Login') !!}

    @else

        {!! link_to_route('tags.index', 'Tags') !!} |

        {!! link_to('/auth/logout', 'Logout') !!}

    @endif