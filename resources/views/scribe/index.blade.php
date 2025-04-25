<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-projets" class="tocify-header">
                <li class="tocify-item level-1" data-unique="projets">
                    <a href="#projets">Projets</a>
                </li>
                                    <ul id="tocify-subheader-projets" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="projets-GETapi-projects">
                                <a href="#projets-GETapi-projects">Liste tous les projets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="projets-POSTapi-projects">
                                <a href="#projets-POSTapi-projects">Crée un nouveau projet</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="projets-GETapi-projects--id-">
                                <a href="#projets-GETapi-projects--id-">Affiche un projet</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="projets-PUTapi-projects--id-">
                                <a href="#projets-PUTapi-projects--id-">Met à jour un projet</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="projets-DELETEapi-projects--id-">
                                <a href="#projets-DELETEapi-projects--id-">Supprime un projet</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-taches" class="tocify-header">
                <li class="tocify-item level-1" data-unique="taches">
                    <a href="#taches">Tâches</a>
                </li>
                                    <ul id="tocify-subheader-taches" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="taches-GETapi-tasks">
                                <a href="#taches-GETapi-tasks">Liste toutes les tâches</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taches-POSTapi-tasks">
                                <a href="#taches-POSTapi-tasks">Crée une nouvelle tâche</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taches-GETapi-tasks--id-">
                                <a href="#taches-GETapi-tasks--id-">Affiche une tâche</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taches-PUTapi-tasks--id-">
                                <a href="#taches-PUTapi-tasks--id-">Met à jour une tâche</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="taches-DELETEapi-tasks--id-">
                                <a href="#taches-DELETEapi-tasks--id-">Supprime une tâche</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 25, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="projets">Projets</h1>

    <p>Endpoints pour gérer les projets (CRUD complet).</p>

                                <h2 id="projets-GETapi-projects">Liste tous les projets</h2>

<p>
</p>

<p>Retourne tous les projets avec leur propriétaire et leurs tâches.</p>

<span id="example-requests-GETapi-projects">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/projects" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/projects"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-projects">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;owner_id&quot;: 1,
        &quot;title&quot;: &quot;Quia sint sit aspernatur.&quot;,
        &quot;description&quot;: &quot;Nulla consequatur voluptas aut et quibusdam. Maxime ipsum possimus corporis. Qui sunt aut corrupti sunt architecto et provident.&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;owner&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;tasks&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;project_id&quot;: 1,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Sed commodi voluptas nihil repellat.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;project_id&quot;: 1,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Nemo numquam qui.&quot;,
                &quot;description&quot;: &quot;Non ipsum et consequatur consequatur et. Ducimus voluptatibus autem repellendus officiis. Est ipsa tenetur et necessitatibus.&quot;,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;project_id&quot;: 1,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Rerum voluptatem qui praesentium quam.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;done&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;project_id&quot;: 1,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Voluptas quidem tempora voluptatem commodi.&quot;,
                &quot;description&quot;: &quot;Est ratione qui voluptatum odit repudiandae cumque. Aliquam consectetur aperiam voluptatem deleniti numquam. Sit autem voluptate magnam id non dolores error. Dolorum consequatur officiis atque ad.&quot;,
                &quot;status&quot;: &quot;done&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;project_id&quot;: 1,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Voluptatem eligendi aut ea nisi id.&quot;,
                &quot;description&quot;: &quot;Unde aut nemo sint ex et asperiores sit. Sed illo et unde assumenda a officia. In maxime id iusto nulla facere aut quos. Repellat quaerat sequi accusamus adipisci id. Aut ducimus quaerat mollitia doloribus reiciendis quia.&quot;,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 2,
        &quot;owner_id&quot;: 1,
        &quot;title&quot;: &quot;Quasi soluta et perferendis.&quot;,
        &quot;description&quot;: &quot;Consequatur et nesciunt veritatis earum. Eos veritatis ut enim reprehenderit.&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;owner&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;tasks&quot;: [
            {
                &quot;id&quot;: 6,
                &quot;project_id&quot;: 2,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Et provident minus ratione molestias ut.&quot;,
                &quot;description&quot;: &quot;Vitae et voluptas ullam vero alias nesciunt minima. Consequatur sit eum aliquam voluptas porro. Expedita ipsam id iusto quia vel atque. Asperiores necessitatibus nulla ut iusto numquam non voluptatem.&quot;,
                &quot;status&quot;: &quot;done&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;project_id&quot;: 2,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Tenetur non ullam vero voluptatem.&quot;,
                &quot;description&quot;: &quot;Repudiandae aspernatur at dolor. Sit sed quibusdam dicta fugiat et iusto expedita aut.&quot;,
                &quot;status&quot;: &quot;done&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;project_id&quot;: 2,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;A autem ut eligendi.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;project_id&quot;: 2,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Sed perspiciatis dignissimos repudiandae aut.&quot;,
                &quot;description&quot;: &quot;Ducimus voluptatem qui ratione occaecati soluta. Voluptatem qui numquam alias. Soluta consequatur et magnam voluptatem alias vero porro.&quot;,
                &quot;status&quot;: &quot;done&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 10,
                &quot;project_id&quot;: 2,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Voluptatibus esse labore.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 3,
        &quot;owner_id&quot;: 2,
        &quot;title&quot;: &quot;Quasi architecto commodi et.&quot;,
        &quot;description&quot;: &quot;Quis aperiam eveniet maxime dolores aut. Perspiciatis rerum temporibus ut est. Ab voluptatem accusantium porro perferendis vel. Officia consequatur aut numquam ullam.&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;owner&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;tasks&quot;: [
            {
                &quot;id&quot;: 11,
                &quot;project_id&quot;: 3,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Ut unde doloremque.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;done&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 12,
                &quot;project_id&quot;: 3,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Ut eligendi magnam quibusdam ea.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;done&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 13,
                &quot;project_id&quot;: 3,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Voluptatem maxime ipsum dolor et.&quot;,
                &quot;description&quot;: &quot;Est enim error delectus deleniti. Esse nobis iusto est corrupti incidunt consectetur. Deleniti cumque et consequatur. Dicta eum blanditiis aut voluptas. Vel ipsa quae et autem suscipit facere aut.&quot;,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 14,
                &quot;project_id&quot;: 3,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Iure ex aliquam veritatis repudiandae nulla.&quot;,
                &quot;description&quot;: &quot;Voluptatem veritatis est soluta unde ea. Ad laboriosam rerum nihil quisquam. Quibusdam voluptatem sunt culpa. Aut cumque vel excepturi.&quot;,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 15,
                &quot;project_id&quot;: 3,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Dolores rerum laborum molestiae non.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 4,
        &quot;owner_id&quot;: 2,
        &quot;title&quot;: &quot;Fugiat qui earum aut.&quot;,
        &quot;description&quot;: &quot;Eum eius libero mollitia laudantium. Soluta voluptas itaque aut sapiente illo voluptatem quis. Repellat ea voluptatem doloremque iusto ea est cum. Sed omnis labore deserunt alias illum sunt laborum.&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;owner&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;tasks&quot;: [
            {
                &quot;id&quot;: 16,
                &quot;project_id&quot;: 4,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Expedita necessitatibus repellat a voluptatem.&quot;,
                &quot;description&quot;: &quot;Qui rerum expedita quibusdam deserunt sunt dolores quam porro. Praesentium illum mollitia deleniti. Autem cum quo quia repudiandae. Dolorum omnis et repudiandae.&quot;,
                &quot;status&quot;: &quot;pending&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 17,
                &quot;project_id&quot;: 4,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Saepe ad animi sint soluta quidem.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 18,
                &quot;project_id&quot;: 4,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Doloremque omnis quae.&quot;,
                &quot;description&quot;: &quot;Nostrum ea molestiae adipisci et. Laborum optio praesentium quia quos placeat veritatis ut error. Veritatis omnis iste dolor ea. Quis et voluptatem autem.&quot;,
                &quot;status&quot;: &quot;done&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 19,
                &quot;project_id&quot;: 4,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Eaque quam rem molestiae nostrum.&quot;,
                &quot;description&quot;: &quot;Cumque voluptas laboriosam tempora eum. Nobis expedita aut eveniet possimus ex. Sequi omnis ratione incidunt aliquam.&quot;,
                &quot;status&quot;: &quot;done&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 20,
                &quot;project_id&quot;: 4,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Dignissimos perferendis amet maiores.&quot;,
                &quot;description&quot;: &quot;Quis maxime est nam. Impedit nisi quidem sunt et cumque in excepturi. Molestiae consequatur praesentium quo placeat vel maxime. Quia laboriosam aut iure sed maiores et.&quot;,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 5,
        &quot;owner_id&quot;: 3,
        &quot;title&quot;: &quot;Excepturi nostrum voluptatem.&quot;,
        &quot;description&quot;: &quot;Sapiente asperiores aliquam pariatur tempore consectetur dolor impedit eos. Dolorum quod dolor deleniti excepturi. Perferendis quo qui illum consequatur.&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;owner&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Cindy Hartmann&quot;,
            &quot;email&quot;: &quot;fisher.hiram@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;tasks&quot;: [
            {
                &quot;id&quot;: 21,
                &quot;project_id&quot;: 5,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Consequatur et explicabo.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 22,
                &quot;project_id&quot;: 5,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Placeat optio tempore.&quot;,
                &quot;description&quot;: &quot;Voluptatem perferendis ut iusto tempora est. Qui qui molestiae in id et fuga dolorem ea. In sunt dolore aut provident nulla facere occaecati accusamus. Similique inventore dignissimos beatae nobis tenetur.&quot;,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 23,
                &quot;project_id&quot;: 5,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Debitis quia autem expedita ad.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 24,
                &quot;project_id&quot;: 5,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Doloribus totam recusandae.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;done&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 25,
                &quot;project_id&quot;: 5,
                &quot;assigned_to&quot;: 1,
                &quot;title&quot;: &quot;Autem alias repudiandae eum repellat.&quot;,
                &quot;description&quot;: &quot;Aut dolorem dolorem quis culpa maiores quas dolor. Esse corrupti ut odio eligendi libero recusandae labore. Ut est nulla omnis non amet nemo.&quot;,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            }
        ]
    },
    {
        &quot;id&quot;: 6,
        &quot;owner_id&quot;: 3,
        &quot;title&quot;: &quot;Dolorum iste.&quot;,
        &quot;description&quot;: &quot;Tenetur non et officiis est. Et magnam et quos eum est. Magnam expedita fuga hic blanditiis voluptatem.&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;owner&quot;: {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Cindy Hartmann&quot;,
            &quot;email&quot;: &quot;fisher.hiram@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;tasks&quot;: [
            {
                &quot;id&quot;: 26,
                &quot;project_id&quot;: 6,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Nobis sequi quam quia praesentium.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;pending&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 27,
                &quot;project_id&quot;: 6,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Eveniet quos eveniet amet.&quot;,
                &quot;description&quot;: null,
                &quot;status&quot;: &quot;pending&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 28,
                &quot;project_id&quot;: 6,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Sit ipsam rerum sed voluptas.&quot;,
                &quot;description&quot;: &quot;In quas a tenetur dolor explicabo cum assumenda. Eligendi debitis eos molestias aliquam aliquid.&quot;,
                &quot;status&quot;: &quot;pending&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 29,
                &quot;project_id&quot;: 6,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Id ab omnis fuga.&quot;,
                &quot;description&quot;: &quot;Assumenda consequuntur qui adipisci necessitatibus. Perspiciatis id alias et corporis eius sit enim. Modi minima dolorem aspernatur at. Et perspiciatis deserunt vel perspiciatis aliquid odio deleniti doloribus.&quot;,
                &quot;status&quot;: &quot;in_progress&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            },
            {
                &quot;id&quot;: 30,
                &quot;project_id&quot;: 6,
                &quot;assigned_to&quot;: 2,
                &quot;title&quot;: &quot;Maxime et voluptatibus.&quot;,
                &quot;description&quot;: &quot;Et id occaecati neque quibusdam soluta repellendus. Doloremque quibusdam iure consequuntur ut sint. Aliquam quaerat dicta facilis eveniet nulla et.&quot;,
                &quot;status&quot;: &quot;done&quot;,
                &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
            }
        ]
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-projects" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-projects"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-projects"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-projects">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-projects" data-method="GET"
      data-path="api/projects"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-projects', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-projects"
                    onclick="tryItOut('GETapi-projects');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-projects"
                    onclick="cancelTryOut('GETapi-projects');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-projects"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/projects</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Le titre du projet</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>owner</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>
<p>Informations du propriétaire</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tasks</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
<br>
<p>Liste des tâches associées</p>
        </div>
                        <h2 id="projets-POSTapi-projects">Crée un nouveau projet</h2>

<p>
</p>



<span id="example-requests-POSTapi-projects">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/projects" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"architecto\",
    \"description\": \"Eius et animi quos velit et.\",
    \"owner_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/projects"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "architecto",
    "description": "Eius et animi quos velit et.",
    "owner_id": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-projects">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;title&quot;: &quot;Projet Alpha&quot;,
    &quot;description&quot;: &quot;Un projet secret.&quot;,
    &quot;owner_id&quot;: 1
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-projects" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-projects"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-projects"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-projects" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-projects">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-projects" data-method="POST"
      data-path="api/projects"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-projects', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-projects"
                    onclick="tryItOut('POSTapi-projects');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-projects"
                    onclick="cancelTryOut('POSTapi-projects');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-projects"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/projects</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-projects"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-projects"
               value="architecto"
               data-component="body">
    <br>
<p>Le titre du projet. Exemple: Projet Alpha Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-projects"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>La description (optionnelle). Exemple: Un projet secret. Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>owner_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="owner_id"                data-endpoint="POSTapi-projects"
               value="16"
               data-component="body">
    <br>
<p>L'ID du propriétaire (user). Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="projets-GETapi-projects--id-">Affiche un projet</h2>

<p>
</p>

<p>Affiche les détails d’un projet ainsi que ses relations (owner, tasks).</p>

<span id="example-requests-GETapi-projects--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/projects/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/projects/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-projects--id-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Project] 16&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-projects--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-projects--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-projects--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-projects--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-projects--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-projects--id-" data-method="GET"
      data-path="api/projects/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-projects--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-projects--id-"
                    onclick="tryItOut('GETapi-projects--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-projects--id-"
                    onclick="cancelTryOut('GETapi-projects--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-projects--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/projects/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-projects--id-"
               value="16"
               data-component="url">
    <br>
<p>L’ID du projet à afficher. Exemple: 1 Example: <code>16</code></p>
            </div>
                    </form>

                    <h2 id="projets-PUTapi-projects--id-">Met à jour un projet</h2>

<p>
</p>



<span id="example-requests-PUTapi-projects--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/projects/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"architecto\",
    \"description\": \"Eius et animi quos velit et.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/projects/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "architecto",
    "description": "Eius et animi quos velit et."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-projects--id-">
</span>
<span id="execution-results-PUTapi-projects--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-projects--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-projects--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-projects--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-projects--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-projects--id-" data-method="PUT"
      data-path="api/projects/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-projects--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-projects--id-"
                    onclick="tryItOut('PUTapi-projects--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-projects--id-"
                    onclick="cancelTryOut('PUTapi-projects--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-projects--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/projects/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/projects/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-projects--id-"
               value="16"
               data-component="url">
    <br>
<p>L’ID du projet à modifier. Exemple: 1 Example: <code>16</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-projects--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Le nouveau titre. Exemple: Nouveau titre Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-projects--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Nouvelle description Example: <code>Eius et animi quos velit et.</code></p>
        </div>
        </form>

                    <h2 id="projets-DELETEapi-projects--id-">Supprime un projet</h2>

<p>
</p>



<span id="example-requests-DELETEapi-projects--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/projects/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/projects/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-projects--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Projet supprim&eacute; avec succ&egrave;s.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-projects--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-projects--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-projects--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-projects--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-projects--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-projects--id-" data-method="DELETE"
      data-path="api/projects/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-projects--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-projects--id-"
                    onclick="tryItOut('DELETEapi-projects--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-projects--id-"
                    onclick="cancelTryOut('DELETEapi-projects--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-projects--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/projects/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-projects--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-projects--id-"
               value="16"
               data-component="url">
    <br>
<p>L’ID du projet à supprimer. Exemple: 1 Example: <code>16</code></p>
            </div>
                    </form>

                <h1 id="taches">Tâches</h1>

    <p>Endpoints pour gérer les tâches liées aux projets.</p>

                                <h2 id="taches-GETapi-tasks">Liste toutes les tâches</h2>

<p>
</p>

<p>Retourne toutes les tâches avec leur projet et l'utilisateur assigné.</p>

<span id="example-requests-GETapi-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tasks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tasks">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;project_id&quot;: 1,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Sed commodi voluptas nihil repellat.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 1,
            &quot;owner_id&quot;: 1,
            &quot;title&quot;: &quot;Quia sint sit aspernatur.&quot;,
            &quot;description&quot;: &quot;Nulla consequatur voluptas aut et quibusdam. Maxime ipsum possimus corporis. Qui sunt aut corrupti sunt architecto et provident.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 2,
        &quot;project_id&quot;: 1,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Nemo numquam qui.&quot;,
        &quot;description&quot;: &quot;Non ipsum et consequatur consequatur et. Ducimus voluptatibus autem repellendus officiis. Est ipsa tenetur et necessitatibus.&quot;,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 1,
            &quot;owner_id&quot;: 1,
            &quot;title&quot;: &quot;Quia sint sit aspernatur.&quot;,
            &quot;description&quot;: &quot;Nulla consequatur voluptas aut et quibusdam. Maxime ipsum possimus corporis. Qui sunt aut corrupti sunt architecto et provident.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 3,
        &quot;project_id&quot;: 1,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Rerum voluptatem qui praesentium quam.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;done&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 1,
            &quot;owner_id&quot;: 1,
            &quot;title&quot;: &quot;Quia sint sit aspernatur.&quot;,
            &quot;description&quot;: &quot;Nulla consequatur voluptas aut et quibusdam. Maxime ipsum possimus corporis. Qui sunt aut corrupti sunt architecto et provident.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 4,
        &quot;project_id&quot;: 1,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Voluptas quidem tempora voluptatem commodi.&quot;,
        &quot;description&quot;: &quot;Est ratione qui voluptatum odit repudiandae cumque. Aliquam consectetur aperiam voluptatem deleniti numquam. Sit autem voluptate magnam id non dolores error. Dolorum consequatur officiis atque ad.&quot;,
        &quot;status&quot;: &quot;done&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 1,
            &quot;owner_id&quot;: 1,
            &quot;title&quot;: &quot;Quia sint sit aspernatur.&quot;,
            &quot;description&quot;: &quot;Nulla consequatur voluptas aut et quibusdam. Maxime ipsum possimus corporis. Qui sunt aut corrupti sunt architecto et provident.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 5,
        &quot;project_id&quot;: 1,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Voluptatem eligendi aut ea nisi id.&quot;,
        &quot;description&quot;: &quot;Unde aut nemo sint ex et asperiores sit. Sed illo et unde assumenda a officia. In maxime id iusto nulla facere aut quos. Repellat quaerat sequi accusamus adipisci id. Aut ducimus quaerat mollitia doloribus reiciendis quia.&quot;,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 1,
            &quot;owner_id&quot;: 1,
            &quot;title&quot;: &quot;Quia sint sit aspernatur.&quot;,
            &quot;description&quot;: &quot;Nulla consequatur voluptas aut et quibusdam. Maxime ipsum possimus corporis. Qui sunt aut corrupti sunt architecto et provident.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 6,
        &quot;project_id&quot;: 2,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Et provident minus ratione molestias ut.&quot;,
        &quot;description&quot;: &quot;Vitae et voluptas ullam vero alias nesciunt minima. Consequatur sit eum aliquam voluptas porro. Expedita ipsam id iusto quia vel atque. Asperiores necessitatibus nulla ut iusto numquam non voluptatem.&quot;,
        &quot;status&quot;: &quot;done&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 2,
            &quot;owner_id&quot;: 1,
            &quot;title&quot;: &quot;Quasi soluta et perferendis.&quot;,
            &quot;description&quot;: &quot;Consequatur et nesciunt veritatis earum. Eos veritatis ut enim reprehenderit.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 7,
        &quot;project_id&quot;: 2,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Tenetur non ullam vero voluptatem.&quot;,
        &quot;description&quot;: &quot;Repudiandae aspernatur at dolor. Sit sed quibusdam dicta fugiat et iusto expedita aut.&quot;,
        &quot;status&quot;: &quot;done&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 2,
            &quot;owner_id&quot;: 1,
            &quot;title&quot;: &quot;Quasi soluta et perferendis.&quot;,
            &quot;description&quot;: &quot;Consequatur et nesciunt veritatis earum. Eos veritatis ut enim reprehenderit.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 8,
        &quot;project_id&quot;: 2,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;A autem ut eligendi.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 2,
            &quot;owner_id&quot;: 1,
            &quot;title&quot;: &quot;Quasi soluta et perferendis.&quot;,
            &quot;description&quot;: &quot;Consequatur et nesciunt veritatis earum. Eos veritatis ut enim reprehenderit.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 9,
        &quot;project_id&quot;: 2,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Sed perspiciatis dignissimos repudiandae aut.&quot;,
        &quot;description&quot;: &quot;Ducimus voluptatem qui ratione occaecati soluta. Voluptatem qui numquam alias. Soluta consequatur et magnam voluptatem alias vero porro.&quot;,
        &quot;status&quot;: &quot;done&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 2,
            &quot;owner_id&quot;: 1,
            &quot;title&quot;: &quot;Quasi soluta et perferendis.&quot;,
            &quot;description&quot;: &quot;Consequatur et nesciunt veritatis earum. Eos veritatis ut enim reprehenderit.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 10,
        &quot;project_id&quot;: 2,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Voluptatibus esse labore.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 2,
            &quot;owner_id&quot;: 1,
            &quot;title&quot;: &quot;Quasi soluta et perferendis.&quot;,
            &quot;description&quot;: &quot;Consequatur et nesciunt veritatis earum. Eos veritatis ut enim reprehenderit.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 11,
        &quot;project_id&quot;: 3,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Ut unde doloremque.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;done&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 3,
            &quot;owner_id&quot;: 2,
            &quot;title&quot;: &quot;Quasi architecto commodi et.&quot;,
            &quot;description&quot;: &quot;Quis aperiam eveniet maxime dolores aut. Perspiciatis rerum temporibus ut est. Ab voluptatem accusantium porro perferendis vel. Officia consequatur aut numquam ullam.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 12,
        &quot;project_id&quot;: 3,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Ut eligendi magnam quibusdam ea.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;done&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 3,
            &quot;owner_id&quot;: 2,
            &quot;title&quot;: &quot;Quasi architecto commodi et.&quot;,
            &quot;description&quot;: &quot;Quis aperiam eveniet maxime dolores aut. Perspiciatis rerum temporibus ut est. Ab voluptatem accusantium porro perferendis vel. Officia consequatur aut numquam ullam.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 13,
        &quot;project_id&quot;: 3,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Voluptatem maxime ipsum dolor et.&quot;,
        &quot;description&quot;: &quot;Est enim error delectus deleniti. Esse nobis iusto est corrupti incidunt consectetur. Deleniti cumque et consequatur. Dicta eum blanditiis aut voluptas. Vel ipsa quae et autem suscipit facere aut.&quot;,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 3,
            &quot;owner_id&quot;: 2,
            &quot;title&quot;: &quot;Quasi architecto commodi et.&quot;,
            &quot;description&quot;: &quot;Quis aperiam eveniet maxime dolores aut. Perspiciatis rerum temporibus ut est. Ab voluptatem accusantium porro perferendis vel. Officia consequatur aut numquam ullam.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 14,
        &quot;project_id&quot;: 3,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Iure ex aliquam veritatis repudiandae nulla.&quot;,
        &quot;description&quot;: &quot;Voluptatem veritatis est soluta unde ea. Ad laboriosam rerum nihil quisquam. Quibusdam voluptatem sunt culpa. Aut cumque vel excepturi.&quot;,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 3,
            &quot;owner_id&quot;: 2,
            &quot;title&quot;: &quot;Quasi architecto commodi et.&quot;,
            &quot;description&quot;: &quot;Quis aperiam eveniet maxime dolores aut. Perspiciatis rerum temporibus ut est. Ab voluptatem accusantium porro perferendis vel. Officia consequatur aut numquam ullam.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 15,
        &quot;project_id&quot;: 3,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Dolores rerum laborum molestiae non.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 3,
            &quot;owner_id&quot;: 2,
            &quot;title&quot;: &quot;Quasi architecto commodi et.&quot;,
            &quot;description&quot;: &quot;Quis aperiam eveniet maxime dolores aut. Perspiciatis rerum temporibus ut est. Ab voluptatem accusantium porro perferendis vel. Officia consequatur aut numquam ullam.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 16,
        &quot;project_id&quot;: 4,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Expedita necessitatibus repellat a voluptatem.&quot;,
        &quot;description&quot;: &quot;Qui rerum expedita quibusdam deserunt sunt dolores quam porro. Praesentium illum mollitia deleniti. Autem cum quo quia repudiandae. Dolorum omnis et repudiandae.&quot;,
        &quot;status&quot;: &quot;pending&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 4,
            &quot;owner_id&quot;: 2,
            &quot;title&quot;: &quot;Fugiat qui earum aut.&quot;,
            &quot;description&quot;: &quot;Eum eius libero mollitia laudantium. Soluta voluptas itaque aut sapiente illo voluptatem quis. Repellat ea voluptatem doloremque iusto ea est cum. Sed omnis labore deserunt alias illum sunt laborum.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 17,
        &quot;project_id&quot;: 4,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Saepe ad animi sint soluta quidem.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 4,
            &quot;owner_id&quot;: 2,
            &quot;title&quot;: &quot;Fugiat qui earum aut.&quot;,
            &quot;description&quot;: &quot;Eum eius libero mollitia laudantium. Soluta voluptas itaque aut sapiente illo voluptatem quis. Repellat ea voluptatem doloremque iusto ea est cum. Sed omnis labore deserunt alias illum sunt laborum.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 18,
        &quot;project_id&quot;: 4,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Doloremque omnis quae.&quot;,
        &quot;description&quot;: &quot;Nostrum ea molestiae adipisci et. Laborum optio praesentium quia quos placeat veritatis ut error. Veritatis omnis iste dolor ea. Quis et voluptatem autem.&quot;,
        &quot;status&quot;: &quot;done&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 4,
            &quot;owner_id&quot;: 2,
            &quot;title&quot;: &quot;Fugiat qui earum aut.&quot;,
            &quot;description&quot;: &quot;Eum eius libero mollitia laudantium. Soluta voluptas itaque aut sapiente illo voluptatem quis. Repellat ea voluptatem doloremque iusto ea est cum. Sed omnis labore deserunt alias illum sunt laborum.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 19,
        &quot;project_id&quot;: 4,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Eaque quam rem molestiae nostrum.&quot;,
        &quot;description&quot;: &quot;Cumque voluptas laboriosam tempora eum. Nobis expedita aut eveniet possimus ex. Sequi omnis ratione incidunt aliquam.&quot;,
        &quot;status&quot;: &quot;done&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 4,
            &quot;owner_id&quot;: 2,
            &quot;title&quot;: &quot;Fugiat qui earum aut.&quot;,
            &quot;description&quot;: &quot;Eum eius libero mollitia laudantium. Soluta voluptas itaque aut sapiente illo voluptatem quis. Repellat ea voluptatem doloremque iusto ea est cum. Sed omnis labore deserunt alias illum sunt laborum.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 20,
        &quot;project_id&quot;: 4,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Dignissimos perferendis amet maiores.&quot;,
        &quot;description&quot;: &quot;Quis maxime est nam. Impedit nisi quidem sunt et cumque in excepturi. Molestiae consequatur praesentium quo placeat vel maxime. Quia laboriosam aut iure sed maiores et.&quot;,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 4,
            &quot;owner_id&quot;: 2,
            &quot;title&quot;: &quot;Fugiat qui earum aut.&quot;,
            &quot;description&quot;: &quot;Eum eius libero mollitia laudantium. Soluta voluptas itaque aut sapiente illo voluptatem quis. Repellat ea voluptatem doloremque iusto ea est cum. Sed omnis labore deserunt alias illum sunt laborum.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 21,
        &quot;project_id&quot;: 5,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Consequatur et explicabo.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 5,
            &quot;owner_id&quot;: 3,
            &quot;title&quot;: &quot;Excepturi nostrum voluptatem.&quot;,
            &quot;description&quot;: &quot;Sapiente asperiores aliquam pariatur tempore consectetur dolor impedit eos. Dolorum quod dolor deleniti excepturi. Perferendis quo qui illum consequatur.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 22,
        &quot;project_id&quot;: 5,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Placeat optio tempore.&quot;,
        &quot;description&quot;: &quot;Voluptatem perferendis ut iusto tempora est. Qui qui molestiae in id et fuga dolorem ea. In sunt dolore aut provident nulla facere occaecati accusamus. Similique inventore dignissimos beatae nobis tenetur.&quot;,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 5,
            &quot;owner_id&quot;: 3,
            &quot;title&quot;: &quot;Excepturi nostrum voluptatem.&quot;,
            &quot;description&quot;: &quot;Sapiente asperiores aliquam pariatur tempore consectetur dolor impedit eos. Dolorum quod dolor deleniti excepturi. Perferendis quo qui illum consequatur.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 23,
        &quot;project_id&quot;: 5,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Debitis quia autem expedita ad.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 5,
            &quot;owner_id&quot;: 3,
            &quot;title&quot;: &quot;Excepturi nostrum voluptatem.&quot;,
            &quot;description&quot;: &quot;Sapiente asperiores aliquam pariatur tempore consectetur dolor impedit eos. Dolorum quod dolor deleniti excepturi. Perferendis quo qui illum consequatur.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 24,
        &quot;project_id&quot;: 5,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Doloribus totam recusandae.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;done&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 5,
            &quot;owner_id&quot;: 3,
            &quot;title&quot;: &quot;Excepturi nostrum voluptatem.&quot;,
            &quot;description&quot;: &quot;Sapiente asperiores aliquam pariatur tempore consectetur dolor impedit eos. Dolorum quod dolor deleniti excepturi. Perferendis quo qui illum consequatur.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 25,
        &quot;project_id&quot;: 5,
        &quot;assigned_to&quot;: 1,
        &quot;title&quot;: &quot;Autem alias repudiandae eum repellat.&quot;,
        &quot;description&quot;: &quot;Aut dolorem dolorem quis culpa maiores quas dolor. Esse corrupti ut odio eligendi libero recusandae labore. Ut est nulla omnis non amet nemo.&quot;,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 5,
            &quot;owner_id&quot;: 3,
            &quot;title&quot;: &quot;Excepturi nostrum voluptatem.&quot;,
            &quot;description&quot;: &quot;Sapiente asperiores aliquam pariatur tempore consectetur dolor impedit eos. Dolorum quod dolor deleniti excepturi. Perferendis quo qui illum consequatur.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Dr. Maxwell Jacobi&quot;,
            &quot;email&quot;: &quot;carole91@example.net&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 26,
        &quot;project_id&quot;: 6,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Nobis sequi quam quia praesentium.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;pending&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 6,
            &quot;owner_id&quot;: 3,
            &quot;title&quot;: &quot;Dolorum iste.&quot;,
            &quot;description&quot;: &quot;Tenetur non et officiis est. Et magnam et quos eum est. Magnam expedita fuga hic blanditiis voluptatem.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 27,
        &quot;project_id&quot;: 6,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Eveniet quos eveniet amet.&quot;,
        &quot;description&quot;: null,
        &quot;status&quot;: &quot;pending&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 6,
            &quot;owner_id&quot;: 3,
            &quot;title&quot;: &quot;Dolorum iste.&quot;,
            &quot;description&quot;: &quot;Tenetur non et officiis est. Et magnam et quos eum est. Magnam expedita fuga hic blanditiis voluptatem.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 28,
        &quot;project_id&quot;: 6,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Sit ipsam rerum sed voluptas.&quot;,
        &quot;description&quot;: &quot;In quas a tenetur dolor explicabo cum assumenda. Eligendi debitis eos molestias aliquam aliquid.&quot;,
        &quot;status&quot;: &quot;pending&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 6,
            &quot;owner_id&quot;: 3,
            &quot;title&quot;: &quot;Dolorum iste.&quot;,
            &quot;description&quot;: &quot;Tenetur non et officiis est. Et magnam et quos eum est. Magnam expedita fuga hic blanditiis voluptatem.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 29,
        &quot;project_id&quot;: 6,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Id ab omnis fuga.&quot;,
        &quot;description&quot;: &quot;Assumenda consequuntur qui adipisci necessitatibus. Perspiciatis id alias et corporis eius sit enim. Modi minima dolorem aspernatur at. Et perspiciatis deserunt vel perspiciatis aliquid odio deleniti doloribus.&quot;,
        &quot;status&quot;: &quot;in_progress&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 6,
            &quot;owner_id&quot;: 3,
            &quot;title&quot;: &quot;Dolorum iste.&quot;,
            &quot;description&quot;: &quot;Tenetur non et officiis est. Et magnam et quos eum est. Magnam expedita fuga hic blanditiis voluptatem.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 30,
        &quot;project_id&quot;: 6,
        &quot;assigned_to&quot;: 2,
        &quot;title&quot;: &quot;Maxime et voluptatibus.&quot;,
        &quot;description&quot;: &quot;Et id occaecati neque quibusdam soluta repellendus. Doloremque quibusdam iure consequuntur ut sint. Aliquam quaerat dicta facilis eveniet nulla et.&quot;,
        &quot;status&quot;: &quot;done&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;project&quot;: {
            &quot;id&quot;: 6,
            &quot;owner_id&quot;: 3,
            &quot;title&quot;: &quot;Dolorum iste.&quot;,
            &quot;description&quot;: &quot;Tenetur non et officiis est. Et magnam et quos eum est. Magnam expedita fuga hic blanditiis voluptatem.&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        },
        &quot;assignee&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
            &quot;email&quot;: &quot;geo70@example.com&quot;,
            &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
        }
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tasks" data-method="GET"
      data-path="api/tasks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tasks"
                    onclick="tryItOut('GETapi-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tasks"
                    onclick="cancelTryOut('GETapi-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

    <h3>Response</h3>
    <h4 class="fancy-heading-panel"><b>Response Fields</b></h4>
    <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Le titre de la tâche</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
<br>
<p>Le statut de la tâche (pending, in_progress, done)</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>project</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>
<p>Projet associé</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>assignee</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
 &nbsp;
<br>
<p>Utilisateur assigné</p>
        </div>
                        <h2 id="taches-POSTapi-tasks">Crée une nouvelle tâche</h2>

<p>
</p>



<span id="example-requests-POSTapi-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/tasks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"architecto\",
    \"description\": \"Eius et animi quos velit et.\",
    \"status\": \"architecto\",
    \"project_id\": 16,
    \"assigned_to\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "architecto",
    "description": "Eius et animi quos velit et.",
    "status": "architecto",
    "project_id": 16,
    "assigned_to": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tasks">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;title&quot;: &quot;Ajouter la page d&#039;accueil&quot;,
    &quot;status&quot;: &quot;pending&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tasks" data-method="POST"
      data-path="api/tasks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tasks"
                    onclick="tryItOut('POSTapi-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tasks"
                    onclick="cancelTryOut('POSTapi-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-tasks"
               value="architecto"
               data-component="body">
    <br>
<p>Le titre de la tâche. Exemple: Ajouter la page d'accueil Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-tasks"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Description de la tâche. Exemple: Doit contenir les boutons de connexion. Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-tasks"
               value="architecto"
               data-component="body">
    <br>
<p>Statut de la tâche. Doit être 'pending', 'in_progress' ou 'done'. Exemple: pending Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>project_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="project_id"                data-endpoint="POSTapi-tasks"
               value="16"
               data-component="body">
    <br>
<p>ID du projet associé. Exemple: 1 Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>assigned_to</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="assigned_to"                data-endpoint="POSTapi-tasks"
               value="16"
               data-component="body">
    <br>
<p>ID de l'utilisateur assigné. Exemple: 2 Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="taches-GETapi-tasks--id-">Affiche une tâche</h2>

<p>
</p>

<p>Retourne les détails d'une tâche, son projet et la personne assignée.</p>

<span id="example-requests-GETapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tasks/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tasks--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 16,
    &quot;project_id&quot;: 4,
    &quot;assigned_to&quot;: 2,
    &quot;title&quot;: &quot;Expedita necessitatibus repellat a voluptatem.&quot;,
    &quot;description&quot;: &quot;Qui rerum expedita quibusdam deserunt sunt dolores quam porro. Praesentium illum mollitia deleniti. Autem cum quo quia repudiandae. Dolorum omnis et repudiandae.&quot;,
    &quot;status&quot;: &quot;pending&quot;,
    &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
    &quot;project&quot;: {
        &quot;id&quot;: 4,
        &quot;owner_id&quot;: 2,
        &quot;title&quot;: &quot;Fugiat qui earum aut.&quot;,
        &quot;description&quot;: &quot;Eum eius libero mollitia laudantium. Soluta voluptas itaque aut sapiente illo voluptatem quis. Repellat ea voluptatem doloremque iusto ea est cum. Sed omnis labore deserunt alias illum sunt laborum.&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
    },
    &quot;assignee&quot;: {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Kylee Connelly Jr.&quot;,
        &quot;email&quot;: &quot;geo70@example.com&quot;,
        &quot;email_verified_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;created_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-25T12:52:18.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tasks--id-" data-method="GET"
      data-path="api/tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tasks--id-"
                    onclick="tryItOut('GETapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tasks--id-"
                    onclick="cancelTryOut('GETapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-tasks--id-"
               value="16"
               data-component="url">
    <br>
<p>ID de la tâche à afficher. Exemple: 1 Example: <code>16</code></p>
            </div>
                    </form>

                    <h2 id="taches-PUTapi-tasks--id-">Met à jour une tâche</h2>

<p>
</p>



<span id="example-requests-PUTapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/tasks/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"architecto\",
    \"description\": \"Eius et animi quos velit et.\",
    \"status\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "architecto",
    "description": "Eius et animi quos velit et.",
    "status": "architecto"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-tasks--id-">
</span>
<span id="execution-results-PUTapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-tasks--id-" data-method="PUT"
      data-path="api/tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-tasks--id-"
                    onclick="tryItOut('PUTapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-tasks--id-"
                    onclick="cancelTryOut('PUTapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-tasks--id-"
               value="16"
               data-component="url">
    <br>
<p>ID de la tâche à modifier. Exemple: 1 Example: <code>16</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-tasks--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Nouveau titre. Exemple: Nouvelle tâche Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-tasks--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Nouvelle description Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-tasks--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Nouveau statut (pending, in_progress, done). Exemple: done Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="taches-DELETEapi-tasks--id-">Supprime une tâche</h2>

<p>
</p>



<span id="example-requests-DELETEapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/tasks/16" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/16"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-tasks--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;T&acirc;che supprim&eacute;e avec succ&egrave;s.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-tasks--id-" data-method="DELETE"
      data-path="api/tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-tasks--id-"
                    onclick="tryItOut('DELETEapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-tasks--id-"
                    onclick="cancelTryOut('DELETEapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-tasks--id-"
               value="16"
               data-component="url">
    <br>
<p>ID de la tâche à supprimer. Exemple: 1 Example: <code>16</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
