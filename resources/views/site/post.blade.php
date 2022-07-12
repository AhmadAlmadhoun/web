<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="{{ asset('siteasset/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('siteasset/css/style..css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('siteasset/css/all.min.css') }}" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
<body>
    <!-- Start Articles -->
      <div class="container">
        @foreach ($post as $p)
        <div class="box">
            <img src="{{ asset('adminasset/img/post/'.$p->image) }}" alt="" />
            <div class="content">
              <h3>{{ $p->titel }}</h3>
              <h2>
                {{ $p->desc}}
                  </h2>
            </div>
      </div>
      @endforeach
      </div>
        <a href="{{ route('index') }}">Go back</a>
</body>
</html>
