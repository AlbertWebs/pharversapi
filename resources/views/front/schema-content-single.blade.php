@foreach ($Posts as $post)
        <script type="application/ld+json">
			{
                "@context": "https://schema.org",
                "@graph": [
                  {
                    "@type": "BreadcrumbList",
                    "@id": "{{url('/')}}/#breadcrumblist",
                    "itemListElement": [
                      {
                        "@type": "ListItem",
                        "@id": "{{url('/')}}/#listItem",
                        "position": 1,
                        "item": {
                          "@type": "WebPage",
                          "@id": "{{url('/')}}/topics/{{$page_topic}}/{{$page_slung}}/",
                          "name": "Home",
                          "description": "{{$post->meta}}",
                          "url": "{{url('/')}}/topics/{{$page_topic}}/{{$page_slung}}/"
                        }
                      }
                    ]
                  },
                  {
                    "@type": "Organization",
                    "@id": "{{url('/')}}/#organization",
                    "name": "African Pharmaceutical Review",
                    "url": "{{url('/')}}/topics/{{$page_topic}}/{{$page_slung}}/",
                    "logo": {
                      "@type": "ImageObject",
                      "url": "{{$post->image_one}}",
                      "@id": "{{url('/')}}/#organizationLogo"
                    },
                    "image": {
                      "@id": "{{url('/')}}/#organizationLogo"
                    },
                    "sameAs": [
                      "https://www.facebook.com/africanpharmaceuticalreview",
                      "https://x.com/af_pharmareview",
                      "https://www.linkedin.com/company/african-pharmaceutical-review/",
                      "https://www.youtube.com/@AfricanPharmaceuticalReview"
                    ],
                    "contactPoint": {
                      "@type": "ContactPoint",
                      "telephone": "+254759311138",
                      "contactType": "Customer Support"
                    }
                  },
                  {
                    "@type": "WebPage",
                    "@id": "{{url('/')}}/#webpage",
                    "url": "{{url('/')}}/topics/{{$page_topic}}/{{$page_slung}}/",
                    "name": "African Pharmaceutical Review - {{$post->meta}}",
                    "description": "{{$post->meta}}",
                    "inLanguage": "en-US",
                    "isPartOf": {
                      "@id": "{{url('/')}}/topics/{{$page_topic}}/{{$page_slung}}/#website"
                    },
                    "breadcrumb": {
                      "@id": "{{url('/')}}/#breadcrumblist"
                    },
                    "image": {
                      "@type": "ImageObject",
                      "url": "{{$post->image_one}}",
                      "@id": "{{url('/')}}/#mainImage",
                      "width": 1000,
                      "height": 194,
                      "caption": "African Pharmaceutical Review"
                    },
                    "primaryImageOfPage": {
                      "@id": "{{url('/')}}/#mainImage"
                    },
                    "datePublished": "2023-07-01T04:37:58+00:00",
                    "dateModified": "2024-01-25T14:55:23+00:00"
                  },
                  {
                    "@type": "WebSite",
                    "@id": "{{url('/')}}/#website",
                    "url": "{{url('/')}}/topics/{{$page_topic}}/{{$page_slung}}/",
                    "name": "African Pharmaceutical Review",
                    "description": "{{$post->meta}}",
                    "inLanguage": "en-US",
                    "publisher": {
                      "@id": "{{url('/')}}/#organization"
                    },
                    "potentialAction": {
                      "@type": "SearchAction",
                      "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "{{url('/')}}/search?s={search_term_string}"
                      },
                      "query-input": "required name=search_term_string"
                    }
                  }
                ]
              }
        </script>
@endforeach
