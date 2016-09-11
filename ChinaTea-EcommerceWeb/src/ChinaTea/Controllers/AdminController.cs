using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace ChinaTea.Controllers
{
    public class AdminController : Controller
    {
        // 网站数据管理界面
        // 实现数据的增删改查

        public ActionResult Index()
        {
            return View();
        }
    }
}