//We have to define our application first
angular.module("toDoList", [])

/*Controller is like a brain of our app. It contain models and logics required
  to operate our to do list.
*/
  .controller("toDoListCtrl", ['$scope',
    function($scope) {
      //A model holding tasks
      $scope.taskList = [
        {done: true,
        task: 'Do nothing'
      },
        {
          done: false,
          task: 'Study with liv'
        },
        {
          done: false,
          task: 'Add a task with liv'
        },
        {
        done: false,
        task: 'Ask liv to add music'
      }
      ];

    //Function for adding task to the task list
      $scope.addTask = function(task) {
        
        //I'm pushing a new task to the task list
        $scope.taskList.push({
          done: false,
          task: task
        });
      };
 
    }
  ]);