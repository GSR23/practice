    <div class="blog-post">
      <h2 class="blog-post-title">
        <a href="/myblog/public/Site/{{ $d_p->id }}">
          {{ $d_p->title }}
        </a>
      </h2>
      <p class="blog-post-meta">{{ $d_p->created_at->toDayDateTimeString() }}</p>
      {{ $d_p->data }}

    </div><!-- /.blog-post -->
