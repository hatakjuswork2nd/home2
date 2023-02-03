@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="get" action={{ route('contact.create') }}>
                        <button type="submit" class="btn btn-primary">
                            新規登録
                        </button>
                    </form>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">名前</th>
                        <th scope="col">件名</th>
                        <th scope="col">作成日</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->subject}}</td>
                            <td>{{$contact->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection