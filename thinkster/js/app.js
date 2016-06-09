// Use Timeout to simulate async function. Practical use of $http AJAX calls
// After execute ASNYC function, we resolve the deferred object; resolve() passed to the callback function
// What if it fails, call the reject() method
// $q service - allows you to quickly convert a callback based asynchronous function into a promise based solution

function getData($timeout, $q) {
    return function() {
        // simulated async function
        // var defer = $q.defer()
        // $q accomplishes the same thing as manually creating the deferred object
        return $q(function(resolve, reject) {
            $timeout(function() {
                if(Math.round(Math.random())) {
                    resolve('data received!')
                    resolve(Math.floor(Math.random() * 10))
                } else {
                    reject('oh no an error! try again')
                }
            }, 2000)
        })
    }
}

// An object that exposes a promise; use a deferred object to signal successful completion of AJAX method
// Return it's PROMISE property, this is the PROMISE object - need to now register a callback function
// Ability to chain promises together. Allows the data to flow thru the chain and be manipulated and mutated at each step

// Chain another callback to our promise object using the then() function
angular.module('app', [])
    .factory('getData', getData)
    .run(function(getData) {
        var promise = getData()
            .then(function(num) {
                console.log(num)
                return num * 2
            })
            .then(function(num) {
                console.log(num) // = random number * 2
            }, function(error) {
                console.error(error)
            })
            .finally(function() {
                console.log('Finished at:', new Date())
            })
    })