  <nav {{ $attributes }}>
    <ul class="flex space-x-4 text-slace-500">
      <li>
        <a href="/">Home</a>
      </li>
      @foreach ($links as $lable => $link)
      <li>→</li>
      <li>
        <a href="{{ $link }}">
            {{$lable}}
        </a>
      </li>
      @endforeach
    </ul>
  </nav>