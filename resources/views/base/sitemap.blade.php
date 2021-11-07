<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9">
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        @foreach ($data as $d)
            <url>
                <loc>{{ $d->url }}</loc>
                <lastmod>{{ $d->last_modified->tz('UTC')->toAtomString() }}</lastmod>
                <priority>{{ @$d->priority ?: '0.8' }}</priority>
            </url>
        @endforeach

        @foreach ($posts as $post)
        <url>
            <loc>{{ route('post', $post->url) }}</loc>
            <news:news>
                <news:publication>
                    <news:name>{{ config('app.name') }}</news:name>
                    <news:language>pt</news:language>
                </news:publication>
                <news:publication_date>{{ $post->created_at->tz('UTC')->toAtomString() }}</news:publication_date>
                <news:title>{{ $post->title }}</news:title>
                <news:keywords>{{ $post->keywords }}</news:keywords>
            </news:news>
        </url>
        @endforeach
    </urlset>
</urlset>