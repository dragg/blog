<div data-ng-repeat="project in vm.projects" class="top">
    <h2>{{project.title}}</h2>
    <p class="text-justify">{{project.description}}</p>
    <a href="#/projects/{{project.id}}" class="btn btn-default">Read More</a>
</div>