function input()
{
    let num1= Number(prompt("enter the number", ));
    let num2=Number(prompt("enter the second number"));
    addition(num1,num2);

}
function addition(num1,num2)
{
    let sum = num1+num2 ;
    document.getElementById("h1").innerHTML = ` ${num1} + ${num2} = `+ sum ;
}

function inputfactn()
{
    let num1 = Number(prompt("enter the number "));
    let ans = factorial(num1) ;
    document.getElementById("facto").innerHTML = ` factorial of ${num1} : </br> = `+ ans ;
}
function factorial(num)
{
    if(num == 0)
        return 1 ;
    let fact =1 ;
    for(let i= num ; i>= 1 ; i--)
    {
        fact = fact * i ;

    }
    return fact; 
    
} 
function inputpnum()
{
    let num1 = Number(prompt("enter the number"));
    if(num1 < 2)
    {
        return Invalid ;
    }
    let primeArr = showPrime(num1) ;
    document.getElementById("pr").innerHTML = primeArr + `are the prime number upto  ${num1} ` ;
    
    
}

function showPrime(num)
{
    let arr = new Array;
    var count = 0 ;
    for(let j = 2 ; j <= num ; j++ )
    { for(let i = 1 ; i <= Math.sqrt(j)  ; i++ )
        {
            if( j % i == 0)
            {
                count++;
            }
            
        }
        if(count == 1)
        {
                arr.push(j) ;
        }
        count = 0 ;
    }
    return arr ;
}