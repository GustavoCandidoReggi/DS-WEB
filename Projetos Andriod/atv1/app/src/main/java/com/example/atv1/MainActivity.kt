package com.example.atv1

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.layout.width
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.foundation.shape.RoundedCornerShape
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
import com.example.atv1.ui.theme.Atv1Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atv1Theme {
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
            CreateCircle1()
            Spacer(modifier = Modifier.height(30.dp))
            CreateCircle2()
        }

    }
}

@Composable
fun CreateCircle1() {

        Card(
            modifier = Modifier
                .padding(3.dp) // Espaçamento externo
                .width(255.dp) // Largura
                .height(88.dp), // Altura

            shape = RoundedCornerShape(11.dp) // Formato circular
        ) {
            Column(modifier = Modifier.fillMaxHeight().padding(9.dp)) {
                Text(text = "Nome: Gustavo candido")
                Text(text = "Tel: (15) 99100-0307")
                Text(text = "Email: gustacrmc@gmail.com")
            }
        }

    }

@Composable
fun CreateCircle2() {

    Card(
        modifier = Modifier
            .padding(3.dp) // Espaçamento externo
            .width(255.dp) // Largura
            .height(88.dp), // Altura

        shape = RoundedCornerShape(11.dp) // Formato circular
    ) {
        Column(modifier = Modifier.fillMaxHeight().padding(9.dp)) {
            Text(text = "Nome: Bruno attina")
            Text(text = "Tel: (15) 99854-7336")
            Text(text = "Email: BrunoAttirui@gmail.com")
        }
    }

}

@Preview
@Composable
fun DefaultPreview() {
    Atv1Theme {
        MyApp()
    }
}
