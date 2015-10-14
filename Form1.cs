namespace WinGridGroupedExportToExcel
{
    using System;
    using System.Data;
    using System.Diagnostics;
    using System.Windows.Forms;

    using Infragistics.Documents.Excel;
    using Infragistics.Win.UltraWinGrid;

    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            this.ultraGrid1.DataSource = PopulateGridData();
        }

        private void ultraGrid1_InitializeLayout(object sender, Infragistics.Win.UltraWinGrid.InitializeLayoutEventArgs e)
        {
            UltraGridLayout layout = e.Layout;
            UltraGridBand rootBand = layout.Bands[0];

            rootBand.RowLayoutStyle = RowLayoutStyle.GroupLayout;

            UltraGridGroup group1 = rootBand.Groups.Add("Group 1");
            UltraGridGroup group2 = rootBand.Groups.Add("Group 2");

            UltraGridGroup subGroup1A = rootBand.Groups.Add("Sub-Group 1A");
            UltraGridGroup subGroup1B = rootBand.Groups.Add("Sub-Group 1B");
            UltraGridGroup subGroup2A = rootBand.Groups.Add("Sub-Group 2A");
            UltraGridGroup subGroup2B = rootBand.Groups.Add("Sub-Group 2B");

            subGroup1A.RowLayoutGroupInfo.ParentGroup = group1;
            subGroup1B.RowLayoutGroupInfo.ParentGroup = group1;
            subGroup2A.RowLayoutGroupInfo.ParentGroup = group2;
            subGroup2B.RowLayoutGroupInfo.ParentGroup = group2;

            rootBand.Columns["id"].RowLayoutColumnInfo.ParentGroup = subGroup1A;
            rootBand.Columns["Name"].RowLayoutColumnInfo.ParentGroup = subGroup1A;
            rootBand.Columns["Quantity"].RowLayoutColumnInfo.ParentGroup = subGroup1B;
            rootBand.Columns["Price"].RowLayoutColumnInfo.ParentGroup = subGroup2A;
            rootBand.Columns["Date"].RowLayoutColumnInfo.ParentGroup = subGroup2B;
        }

        private void buttonExport_Click(object sender, EventArgs e)
        {
            string outPutFile = @"test.xls";
            ultraGridExcelExporter1.Export(ultraGrid1, outPutFile, WorkbookFormat.Excel97To2003);
            Process.Start(outPutFile);
        }

        private DataSet PopulateGridData()
        {
            DataSet dataSet = new DataSet();

            DataTable dataTable = dataSet.Tables.Add("table1");
            dataTable.Columns.Add("id", typeof(int)).AutoIncrement = true;
            dataTable.Columns.Add("Name", typeof(string));
            dataTable.Columns.Add("Quantity", typeof(double));
            dataTable.Columns.Add("Price", typeof(double));
            dataTable.Columns.Add("Date", typeof(DateTime));

            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Beverage", 5050.25, 10.2, new DateTime(2008, 04, 22) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Appliances", 51312.123, 90, new DateTime(2012, 05, 10) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "FastFood", 26545.16450, 32, new DateTime(2005, 10, 05) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Furniture", 1002, 79, new DateTime(2009, 02, 28) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Meat", 40513, 10.2, new DateTime(2008, 04, 22) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Fruits", 25, 12, new DateTime(2012, 05, 10) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Vegetables", 300, 13, new DateTime(2005, 10, 05) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Cars", 13, 200, new DateTime(2009, 02, 28) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Tools", 60, 15.3, new DateTime(2008, 04, 22) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Estate", 5, 3000, new DateTime(2012, 05, 10) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Motorcycles", 10, 320, new DateTime(2005, 10, 05) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Clothes", 40, 69, new DateTime(2009, 02, 28) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Shoes", 24, 40.6, new DateTime(2008, 04, 22) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Games", 53, 50, new DateTime(2012, 05, 10) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Books", 42, 22, new DateTime(2005, 10, 05) });
            dataSet.Tables["table1"].Rows.Add(new Object[] { null, "Movies", 38, 19, new DateTime(2009, 02, 28) });

            return dataSet;
        }
    }
}
