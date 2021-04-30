# Practical-Task

{
Julia is collecting money from her classmates for a trip. Each classmate has a unique ID number where ID numbers start at 1 and increment by1 until all classmates have a number. Each classmate is prepared to donate the number of dollars that matches their ID, so classmate 1 can give 1 dollar, classmate 2 can give 2 dollars and so on. Julia is superstitious, though, and does not ever want to have a sum that matches her unlucky number. To avoid this, she may refuse a donation from any classmate. If she visits all of her classmates in ID order, what is the maximum amount of money she can collect without ever having a number of dollars that matches her unlucky number? Since the result may be very large, return the result modulo 1000000007 (109 + 7).

For example, there are n = 4 classmates, and her unlucky numberk = 6. If she collects from each of her first three classmates, she will have 6 dollars, which is her unlucky number. To avoid this, she will not collect from at least one classmate, either 1, 2 or 3. If she skips classmate1, she collects 2 + 3 + 4 = 9 dollars. If she skips number 2, she collects1 + 3 + 4 = 8 dollars, and if she skips classmate 3, she only collects 1 + 2 + 4 = 7 dollars. The maximum amount she can collect is 9 dollars.

Function Description
Complete the maxMoney function in the editor below. It must return an integer that represents the maximum amount she can collect, modulo 1000000007 (109 + 7).

maxMoney has the following parameters:
n: an integer that denotes the number of classmates
k: an integer that denotes Julia's unlucky number




Sample Case 0

Sample Input For Custom Testing
2
2


Sample Output 0

Sample Input For Custom Testing
3
Explanation 0
Julia visits the following sequence of n = 2 classmates:
    1. Julia collects 1 dollar from classmate 1 to get sum = 1.
    2. Julia collects 2 dollars from classmate 2 to get sum = 1 + 2 = 3; observe that she collected a maximal amount of money and avoided having exactly k = 2 dollars.


====================================================================

Sample Case 1
Sample Input For Custom Testing
2
1


Sample Output 1
Sample Input For Custom Testing
2


Explanation 1
Julia visits the following sequence of n = 2 classmates:
   1.  Julia will not collect 1 dollar from classmate 1 because k = 1 and she   refuses to have a sum ≡ k at any time.
   2.  Julia moves on and collects 2 dollars from classmate 2 to get sum = 0 + 2 = 2.



==============================================

Sample Case 2
Sample Input For Custom Testing
3
3



Sample Output 2
Sample Input For Custom Testing
5


Explanation 2
Julia must skip some classmate because collecting from all her classmates will result in a sum ≡ k = 3 when she collects from the second classmate. There are two ways for her to visit all n = 3 classmates:
 She can collect 1 dollar from classmate 1 to get sum = 1. Next, she can refuse to collect 2 dollars from classmate2 to avoid having a sumequal to k. Next, she can collect3 dollars from classmate 3 to get sum = 1 + 3 = 4.
 She can refuse to collect 1 dollar from classmate 1, meaning that sum = 0. Next, she can collect 2 dollars from classmate 2 to get sum = 0 + 2 = 2. Next, she can collect 3 dollars from classmate 3 to get sum = 2 + 3 = 5.
Because we want the maximum amount of money that Julia can collect from her sequentially-numbered classmates without ever having a sum equal to k, we return 5 as our answer.

}
