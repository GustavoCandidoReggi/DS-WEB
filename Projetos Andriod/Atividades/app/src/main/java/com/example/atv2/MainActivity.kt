package com.example.atv2

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Scaffold
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atv.MyApp
import com.example.atv2.ui.theme.ATV2Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            ATV2Theme {
                MyApp()
                }
            }
        }
    }


@Composable
fun MyApp() {
    Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color(0xFF546E7A)
    ){
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ){
            Text(text = "Nome: Coca cola espumante 350ml",
                style = TextStyle(color =
                Color.White,
                    fontSize = 39.sp)
            )
            Text(text = "Preço: R$3,50",
                style = TextStyle(color =
                Color.White,
                    fontSize = 39.sp)
            )
            CreateCircle()
        }

        }

}
@Composable
fun CreateCircle() {
    Card(
        modifier = Modifier
            .padding(3.dp) // Espaçamento externo
            .size(150.dp), // Altura e largura iguais

        shape = CircleShape // Formato circular
    ) {
        Box (modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center){
            Text(text = "Comprar")
        }
    }
}
@Preview
@Composable
fun DefaultPreview() {
    ATV2Theme {
        MyApp()
    }
}