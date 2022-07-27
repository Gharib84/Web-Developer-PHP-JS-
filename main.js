/* najpierw musimu stworzyc global variable ktore ma array object wartosci */
var arr_object = [
    {
        username: "Jan Kowalski",
        birthYear: 1983,
        salary: 4200
    },
    {
        username: "Anna Nowak",
        birthYear: 1994,
        salary: 7500

    },
    {
        username: "Jakub Jakubowski",
        birthYear: 1985,
        salary: 18000
    },
    {
        username: "Piotr Kozak",
        birthYear: 2000,
        salary: 4999
    },
    {
        username: "Marek Sinica",
        birthYear: 1989,
        salary: 7200
    },
    {
        username: "Kamila Wiśniewska",
        birthYear: 1972,
        salary: 6800
    },
];


/* nasza functcja ktore pozwoli nam rozwiazac zadanie . ja skorzytsam build in array methods ktore pomagal mi fetch wszystkie
elementy na array  

*/

var welcomeUser = (arr)=> {
    let date = new Date();
    let getfullyear = date.getFullYear();
    let age = null;
    arr.filter((e) => {
        if (e.salary > 15000) {
            console.log("Witaj, prezesie!");
        } else if (e.salary < 5000) {
            console.log(`${e.username}, szykuj się na podwyżkę!`);
        } else if (getfullyear - e.birthYear) {
            age = getfullyear - e.birthYear;
            if (age % 2 == 0) {
                console.log(`wiiaj ${e.username} W tym roku kończysz ${age} Lat`);
            }else {
                console.log(`${e.username} jesteś zwolniony!`)
            }
        }
    })
}


// run Nasza Funkcja zeby zbadac

welcomeUser(arr_object);