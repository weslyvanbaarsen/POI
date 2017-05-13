using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Collections;
namespace aiConsole
{
    class Program
    {
        static ArrayList commands = new ArrayList();
        public Program()
        {
            //add commands
            commands.Add(new google());
        }
        static void Main(string[] args)
        {
            System.Console.WriteLine("welcome user");
            String c = System.Console.ReadLine();
            if (c.Equals("google"))
            {
                +
            }
        }
    }
    class Command
    {
        public virtual void action()
        {

        }
    }
    class google : Command
    {
        public String name = "google";
        public override void action()
        {
            
        }
    }
}
