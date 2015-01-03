<div>
    <h1>{{vm.project.title}}</h1>
    <p>{{vm.project.description}}</p>
    <h4>Список статей, связанных с разработкой проекта:</h4>
    <ul data-ng-repeat="article in vm.project.articles" class="list-unstyled">
        <li><a href="#/articles/{{article.id}}">{{article.title}}</a></li>
    </ul>
</div>