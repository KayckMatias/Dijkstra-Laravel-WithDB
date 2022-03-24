<html>
<head>
    <title>dijkstraProject</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/aresta">Arestas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/vertice">Vértices</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dijkstra">Dijkstra</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container">
            <div class="py-4">
                @yield('content')
            </div>
        </main>
    </div>
  
</body>
</html>