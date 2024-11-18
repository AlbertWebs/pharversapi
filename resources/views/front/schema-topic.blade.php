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
                  "@id": "{{url('/')}}/topic/{{$page_slung}}/",
                  "name": "Home",
                  "description": "Get the latest news, interviews insights and developments of the African Pharmaceutical Industry. African Pharmaceutical Review keeps you up to date.",
                  "url": "{{url('/')}}/topic/{{$page_slung}}/"
                }
              }
            ]
          },
          {
            "@type": "Organization",
            "@id": "{{url('/')}}/#organization",
            "name": "African Pharmaceutical Review",
            "url": "{{url('/')}}/topic/{{$page_slung}}/",
            "logo": {
              "@type": "ImageObject",
              "url": "{{url('/')}}/uploads/logo/log.png",
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
            "url": "{{url('/')}}/topic/{{$page_slung}}/",
            "name": "African Pharmaceutical Review - Keep up to date with the Latest News, Articles and Insights on the drug manufacturing, trade, technology and pharma supply chains in Africa.",
            "description": "Get the latest news, interviews insights and developments of the African Pharmaceutical Industry. African Pharmaceutical Review keeps you up to date.",
            "inLanguage": "en-US",
            "isPartOf": {
              "@id": "{{url('/')}}/topic/{{$page_slung}}/#website"
            },
            "breadcrumb": {
              "@id": "{{url('/')}}/#breadcrumblist"
            },
            "image": {
              "@type": "ImageObject",
              "url": "{{url('/')}}/uploads/logo/log.png",
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
            "url": "{{url('/')}}/topic/{{$page_slung}}/",
            "name": "African Pharmaceutical Review",
            "description": "Keep up to date with the Latest News, Articles and Insights on the drug manufacturing, trade, technology and pharma supply chains in Africa.",
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
