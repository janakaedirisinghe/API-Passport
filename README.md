 API-Passport

<br>
<h3>All Routes</h3>
<br>

<pre>
        | POST      | api/products                            | insert products | authentication is required
        | GET|HEAD  | api/products                            | get all products
        | GET|HEAD  | api/products/{product}                  | get single product
        | DELETE    | api/products/{product}                  | delete single product | authentication is required
        | PUT|PATCH | api/products/{product}                  | update your single product | authentication is required
        | POST      | api/products/{product}/reviews          | post review belong to product | authentication is required
        | GET|HEAD  | api/products/{product}/reviews          | get product reviews
        | DELETE    | api/products/{product}/reviews/{review} | delete single review | authentication is required
        | PUT|PATCH | api/products/{product}/reviews/{review} | update your single review | authentication is required

</pre>
