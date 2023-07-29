using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Data.SqlClient;
using System.Data.Common;
using MySql.Data.MySqlClient;
using System.Windows.Input;
using Org.BouncyCastle.Utilities.Collections;
using System.Reflection;
using System.Xml.Linq;
using System.Web;
using static System.Windows.Forms.VisualStyles.VisualStyleElement;
using System.Collections;
using System.Configuration;
using System.Security.Cryptography;

namespace telephone_diary
{
    public partial class Form1 : Form
    {
        MySqlConnection connection = new MySqlConnection("datasource=localhost;port=3306;username=root;password=root");
        
        public Form1()
        {
            InitializeComponent();
        }
        private void Form1_Load(object sender, EventArgs e)
        {
            gridload();
        }
        private void gridload()
        {
            string selectQuery = "SELECT * FROM nazarok.telephone_diary";
            DataTable table = new DataTable();
            MySqlDataAdapter adapter = new MySqlDataAdapter(selectQuery, connection);
            adapter.Fill(table);
            dataGridView1.DataSource = table;
        }
        private void button2_Click(object sender, EventArgs e)
        {
            string insertQuery = "INSERT INTO nazarok.telephone_diary(name,category,email,surname,mobile) " +
                "VALUES('" + textBox1.Text + "','" + comboBox1.Text + "','" + textBox4.Text + "','" + textBox2.Text + "'," + textBox3.Text + ")";

            connection.Open();
            MySqlCommand command = new MySqlCommand(insertQuery, connection);

            try
            {
                if (command.ExecuteNonQuery() == 1)
                {
                    MessageBox.Show("Data Inserted");
                }
                else
                {
                    MessageBox.Show("Data Not Inserted");
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
            connection.Close();
            Application.Restart();
        }
        private void button3_Click(object sender, EventArgs e)
        {
            
            string UpdateQuery = "UPDATE nazarok.telephone_diary SET name = '" + textBox1.Text + 
                "',surname = '" + textBox2.Text + "',mobile ='" + textBox3.Text + "',email ='" + 
                textBox4.Text + "',category ='" + comboBox1.Text + "' WHERE (mobile = '" + textBox3.Text + "')";
            connection.Open();
            try
            {
                MySqlCommand command = new MySqlCommand(UpdateQuery, connection);
                if (command.ExecuteNonQuery() == 1)
                {
                    MessageBox.Show("DATA UPDATED");
                }
                else
                {
                    MessageBox.Show("Data NOT UPDATED");
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
            connection.Close();
            Application.Restart();
        }
        private void button1_Click(object sender, EventArgs e)
        {
            textBox1.Text = "";
            textBox2.Clear();
            textBox3.Text = "";
            textBox4.Clear();
            comboBox1.SelectedIndex = -1;
            textBox1.Focus();
            
        }

        private void button4_Click(object sender, EventArgs e)
        {
            foreach (DataGridViewRow item in this.dataGridView1.SelectedRows)
            {
                dataGridView1.Rows.RemoveAt(item.Index);
            }
            string deleteQuery = "DELETE FROM nazarok.telephone_diary WHERE (mobile = '" + textBox3.Text + "')";
            
            connection.Open();
            try
            {
                MySqlCommand deletecommand = new MySqlCommand(deleteQuery,connection);
                if (deletecommand.ExecuteNonQuery() == 1)
                {
                    MessageBox.Show("DATA DELETE");
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.Message);
            }
            connection.Close();
            Application.Restart();
        }
    }
}
