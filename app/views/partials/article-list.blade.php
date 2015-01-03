<div data-ng-repeat="article in vm.articles" class="top">
    <h2>{{article.title}}</h2>
    <p class="text-justify">{{article.body}}</p>
    <a href="#/articles/{{article.id}}" class="btn btn-default">Read More</a>
    {{article.created_at}}
</div>