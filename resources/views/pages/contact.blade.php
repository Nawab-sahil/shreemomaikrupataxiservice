@extends('layouts.main')

@section('title','Contact Taxi Service in Surat')
@section('meta_description','Contact best taxi service in Surat.')

@section('content')
<h1>Contact Us</h1>

<p><strong>Phone:</strong> +91XXXXXXXXXX</p>
<p><strong>Location:</strong> Surat, Gujarat</p>

<!-- Local Business Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TaxiService",
  "name": "Shree Momai Krupa Taxi Service",
  "areaServed": "Surat",
  "telephone": "+91XXXXXXXXXX",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Surat",
    "addressRegion": "Gujarat",
    "addressCountry": "IN"
  }
}
</script>

@endsection
