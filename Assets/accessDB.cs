using System.Collections;
using System.Collections.Generic;
using TMPro;
using Unity.VisualScripting;
using UnityEditor;
using UnityEngine;
using UnityEngine.Networking;
using UnityEngine.Rendering.VirtualTexturing;
using UnityEngine.UI;

public class accessDB : MonoBehaviour
{
    string url = "http://localhost/updateScore.php";
    // Use this for initialization
    IEnumerator Start()
    {  
        WWW www = new WWW(url);  
        //UnityWebRequest www = new UnityWebRequest(url);
        yield return www;
        //string result = www.ToString();
        string result = www.text;
        print("data received "+result);  
        GameObject.Find("high_scores").GetComponent<TextMeshProUGUI>().text = result;
    }


    // Update is called once per frame
    void Update()
    {
        
    }
}
