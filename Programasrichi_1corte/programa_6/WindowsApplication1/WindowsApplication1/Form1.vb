Imports System.IO
<<<<<<< HEAD
Public Class Form1
    Dim directorio As String
    Dim archivo As StreamWriter
    Dim fi As FileInfo

=======

Public Class Form1
    Dim directorio As String
    Dim archivo As StreamWriter
    Dim fi As FileInfo

>>>>>>> programa 6... ya crea archivos
    Public Sub nocargado()
        Label4.Text = "No hay archivo cargado"
        Label4.ForeColor = Color.Red
    End Sub
<<<<<<< HEAD
=======

>>>>>>> programa 6... ya crea archivos
    Public Sub cargado()
        Label4.ForeColor = Color.Green
        Label4.Text = "Archivo cargado"
    End Sub
<<<<<<< HEAD
    Private Sub SalirToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles SalirToolStripMenuItem.Click
        Close()
    End Sub
=======

    Private Sub SalirToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles SalirToolStripMenuItem.Click
        Close()
    End Sub

>>>>>>> programa 6... ya crea archivos
    Private Sub NuevoToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles NuevoToolStripMenuItem.Click
        Dim nuevo As New SaveFileDialog
        nuevo.Filter = "Archivos de texto | *.txt"
        nuevo.Title = "Guardar en..."
        nuevo.InitialDirectory = "C:/"
        nuevo.DefaultExt = "txt"
        If nuevo.ShowDialog = Windows.Forms.DialogResult.OK Then
            TabControl1.Visible = True
            cargado()
            TextBox1.Focus()
            directorio = nuevo.FileName.ToString()
            If File.Exists(directorio) = False Then
                archivo = File.CreateText(directorio)
                archivo.WriteLine("Nombre: ApMat: ApPat:")
                archivo.Flush()
                archivo.Close()
            Else
                MessageBox.Show("El archivo ya existe, cree otro nuevo")
            End If
            fi = New FileInfo(directorio)
        End If
    End Sub

    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        nocargado()
    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim a1 As String = TextBox1.Text
        Dim a2 As String = TextBox2.Text
        Dim a3 As String = TextBox3.Text
        Dim a As String = a1 + " " + a2 + " " + a3 + ""
<<<<<<< HEAD
        If File.Exists(directorio) Then
=======
        If File.Exists(directorio) = True Then
>>>>>>> programa 6... ya crea archivos
            archivo = fi.AppendText()
            archivo.WriteLine(a)
            archivo.Flush()
            archivo.Close()
        End If
        MessageBox.Show("Datos guardados")
        TextBox1.Clear()
        TextBox2.Clear()
        TextBox3.Clear()
        TextBox1.Focus()
    End Sub
<<<<<<< HEAD
=======

    Private Sub AbrirToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles AbrirToolStripMenuItem.Click
        Dim otro As New OpenFileDialog
        otro.Filter = "Archivos de texto | *.txt"
        otro.DefaultExt = "txt"
        If otro.ShowDialog = Windows.Forms.DialogResult.OK Then
            TabControl1.Visible = True
            cargado()
            TextBox1.Focus()
            directorio = otro.FileName.ToString()
            fi = New FileInfo(directorio)
        End If
    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click

    End Sub
>>>>>>> programa 6... ya crea archivos
End Class
