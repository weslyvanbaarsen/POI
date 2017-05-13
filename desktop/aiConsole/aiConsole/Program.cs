using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Collections;
using System.Threading;
namespace aiConsole
{
    class Program
    {
        //variables
        public static String userName;
        public static String command;
        public static ArrayList commands = new ArrayList();
        //methods
        static void initCommands()
        {
            commands.Add(new Command("connect"));
        }
        static void Main(string[] args)
        {
            initCommands();
            System.Console.WriteLine("hi, who are you?");
            userName = System.Console.ReadLine();
            System.Console.WriteLine("Welcome, " + userName + ". My name is poi");
            command = System.Console.ReadLine();
            foreach (Command c in commands)
            {
                if (command.Equals(c.cName))
                {
                    c.action();
                }
            }

            System.Console.WriteLine("i'm leaving, bye my lover, good bye my friend");
            Thread.Sleep(2000);
        }
    }
    class Command
    {
       public Command(String cName)
        {
            this.cName = cName;
        }
        public String cName;
        public void action(){}
    }
	class google
	{
	}
}
