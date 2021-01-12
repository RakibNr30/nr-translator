<style>
    .card .profile-user-img {
        height: 100px;
        width:100px;
        border-radius: 50%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<div class="card card-gray-dark card-outline">
    <div class="card-body box-profile">
        @php
            $user = \App\Models\User::find(auth()->user()->id);
        @endphp
        <div class="text-center">
            <div class="profile-user-img" style="background-image: url({{ isset($user->avatar->file_url) ? $user->avatar->file_url : 'https://via.placeholder.com/128x128.jpg?text=' . $user->name }})">
            </div>
        </div>
        <h3 class="profile-username text-center">{{ $user->name }}</h3>
        <ul class="nav nav-pills flex-column">
            @foreach(json_decode(json_encode(config('core.profile_menu'))) as $profile_menu_key => $profile_menu)
                <li class="nav-item {{ $profile_menu_key == ($active ?? '') ? 'bg-light' : '' }}">
                    <a href="{{ $profile_menu->url }}" class="nav-link"
                       style="padding: 10px; font-size: 16px; color: #212543;">
                        {{ $profile_menu->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
