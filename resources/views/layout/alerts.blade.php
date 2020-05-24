         {{-- MailMessage alert --}}


@if (session('mail_message'))
    <div class="alert alert-success text-center">{{ session('mail_message') }}</div>
@endif



           {{-- Cookie alert --}}

@if (session('cookie_status'))
    <div class="alert alert-info text-center">{{ session('cookie_status') }}</div>
@endif

@if (count($errors)>0)
    <div class="alert alert-danger text-center">
        @foreach ($errors->all() as $error)
            <ul>
            <li>{{$error}}</li>
            </ul>
        @endforeach
    </div>
@endif
