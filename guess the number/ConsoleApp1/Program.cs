Random random = new Random();
int numWin = random.Next(0, 1000);
bool win = false;
do
{
    Console.Write("guess a number(between 0 and 1000):");
    string i = Console.ReadLine();
    int numUser = int.Parse(i);
    if(numUser < numWin)
    {
        Console.WriteLine("Need more, try again");
    }
    else if(numUser > numWin)
    {
            Console.WriteLine("Too much, try again");
    }
    else
    {
        Console.WriteLine("YOU ARE WIN!!!!!!!!!!!!");
        win = true;
    }
}
while (win == false);

