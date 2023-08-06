using Microsoft.EntityFrameworkCore;
using RazorPizzeria.Models;

namespace RazorPizzeria.Data
{
	public class ApplicationDbContent : DbContext
	{
		public DbSet<PizzaOrder> PizzaOrders { get; set; }
		public ApplicationDbContent(DbContextOptions<ApplicationDbContent> options) : base(options)
		{

		}
	}
}
