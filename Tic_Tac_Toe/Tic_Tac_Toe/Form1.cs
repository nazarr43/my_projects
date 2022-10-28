using System;
using System.CodeDom;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Tic_Tac_Toe
{
    public partial class Form1 : Form
    {
        bool turn = true;
        public Form1()
        {
            InitializeComponent();
        }
            private void button1_Click(object sender, EventArgs e)
        {
           Button b = (Button)sender;
            if (turn)
                b.Text = "X";
            else
                b.Text = "Y";
            turn = !turn;
            b.Enabled = false;
            Check_Winner();
        }
        private void Check_Winner()
        {
            bool winner = false;
            if ((button1.Text == button5.Text) && (button5.Text == button9.Text))
            {
                winner = true;
                MessageBox.Show("WIN!!!");
                Application.Restart();
            }
                
            else if ((button3.Text == button5.Text) && (button5.Text == button7.Text))
            {
                winner = true;
                MessageBox.Show("WIN!!!");
                Application.Restart();
            }
                

            else if ((button1.Text == button4.Text) && (button4.Text == button7.Text))
            {
                winner = true;
                MessageBox.Show("WIN!!!");
                Application.Restart();

            }
            else if ((button2.Text == button5.Text) && (button5.Text == button8.Text))
            {
                winner = true;
                MessageBox.Show("WIN!!!");
                Application.Restart();
            }
            else if ((button3.Text == button6.Text) && (button6.Text == button9.Text))
            {
                winner = true;
                MessageBox.Show("WIN!!!");
                Application.Restart(); 
            }
            else if ((button1.Text == button2.Text) && (button2.Text == button3.Text))
            {
                winner = true;
                MessageBox.Show("WIN!!!");
                Application.Restart();
            }
            else if ((button4.Text == button5.Text) && (button5.Text == button6.Text))
            {
                winner = true;
                MessageBox.Show("WIN!!!");
                Application.Restart();
            }
            else if ((button7.Text == button8.Text) && (button8.Text == button9.Text))
            {
                winner = true;
                MessageBox.Show("WIN!!!");
                Application.Restart();
            }
        } 
    }
}
