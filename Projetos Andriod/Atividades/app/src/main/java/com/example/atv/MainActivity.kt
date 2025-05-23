package com.example.atv

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
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
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Scaffold
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atv.ui.theme.ATVTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            ATVTheme {
                MyApp()

                }
            }
        }
    }


@Composable
fun MyApp() {
    var placarone by remember{ mutableStateOf(0) }
    var placartwo by remember{ mutableStateOf(0) }
    Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color(0xFF546E7A)
    ){Column(
        verticalArrangement = Arrangement.Center,
        horizontalAlignment = Alignment.CenterHorizontally
    ){
            Column(
                verticalArrangement = Arrangement.Center,
                horizontalAlignment = Alignment.CenterHorizontally
            ){
                Text(text = "Time 1:",
                    style = TextStyle(color =
                    Color.White,
                        fontSize = 39.sp)
                )

                Text(text = "$placarone",
                    style = TextStyle(color =
                    Color.White,
                        fontSize = 39.sp)
                )
                Spacer(modifier = Modifier.height(50.dp))
                CreateCircle1(placarone) { placarone+=1}
            }
            Spacer(modifier = Modifier.height(30.dp))
            Column(
                verticalArrangement = Arrangement.Center,
                horizontalAlignment = Alignment.CenterHorizontally
            ){
                Text(text = "Time 2:",
                    style = TextStyle(color =
                    Color.White,
                        fontSize = 39.sp)
                )

                Text(text = "$placartwo",
                    style = TextStyle(color =
                    Color.White,
                        fontSize = 39.sp)
                )
                Spacer(modifier = Modifier.height(50.dp))
                CreateCircle1(placartwo) { placartwo+=1}
            }
    }
    }
}

@Composable
fun CreateCircle1(placarone: Int, onTap: () -> Unit) {
    Card(
        modifier = Modifier
            .padding(3.dp) // Espaçamento externo
            .size(150.dp) // Altura e largura iguais
            .clickable {
                onTap()
                Log.d("Contador", "CreateCircle: $placarone")
            },
        shape = CircleShape // Formato circular
    ) {
        Box (modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center){
            Text(text = "+1")
        }
    }
}

@Composable
fun CreateCircle2(placartwo: Int, onTap: () -> Unit) {
    Card(
        modifier = Modifier
            .padding(3.dp) // Espaçamento externo
            .size(150.dp) // Altura e largura iguais
            .clickable {
                onTap()
                Log.d("Contador", "CreateCircle2: $placartwo")
            },
        shape = CircleShape // Formato circular
    ) {
        Box (modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center){
            Text(text = "+1")
        }
    }
}
@Preview
@Composable
fun DefaultPreview() {
    ATVTheme {
        MyApp()
    }
}