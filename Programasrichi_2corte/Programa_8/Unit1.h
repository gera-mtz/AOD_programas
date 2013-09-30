//---------------------------------------------------------------------------

#ifndef Unit1H
#define Unit1H
//---------------------------------------------------------------------------
#include <System.Classes.hpp>
#include <Vcl.Controls.hpp>
#include <Vcl.StdCtrls.hpp>
#include <Vcl.Forms.hpp>
#include <Vcl.Menus.hpp>
//---------------------------------------------------------------------------
class TForm1 : public TForm
{
__published:	// IDE-managed Components
	TMainMenu *MainMenu1;
	TMenuItem *Menu1;
	TMenuItem *Mascotas1;
	TMenuItem *Propietarios1;
	TMenuItem *Campeonatos1;
	TMenuItem *N1;
	TMenuItem *Ingresar1;
	TMenuItem *Eliminar1;
	TMenuItem *Consultar1;
	TMenuItem *Ingresar2;
	TMenuItem *Eliminar2;
	TMenuItem *Consultar2;
	TMenuItem *ingresar3;
	TMenuItem *Eliminar3;
	TMenuItem *Consultar3;
	TMenuItem *Salir1;
	void __fastcall Salir1Click(TObject *Sender);
private:	// User declarations
public:		// User declarations
	__fastcall TForm1(TComponent* Owner);
};
//---------------------------------------------------------------------------
extern PACKAGE TForm1 *Form1;
//---------------------------------------------------------------------------
#endif
