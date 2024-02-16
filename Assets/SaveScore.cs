using System.Collections;
using System.Collections.Generic;
using TMPro;
using UnityEngine;
using UnityEngine.UI;

public class SaveScore : MonoBehaviour
{
    string playerName;
    int score;

    // Start is called before the first frame update
    void Start()
    {
        gameObject.GetComponent<TMP_InputField>().onEndEdit.AddListener(saveScore);
        score = 1000;

    }

    // Update is called once per frame
    void Update()
    {
        
    }
    void saveScore(string textInField)
    {
        playerName = textInField;
        print("starting to save scoroe for user "+ textInField);
        StartCoroutine(connectToPHP());

    }
    IEnumerator connectToPHP()
    {
        string url = "http://localhost/updateScore_b.php";
        url += "?name=" + playerName + "&score=" + score;
        WWW www = new WWW(url);
        yield return www;
        print("DB updated");
    }
}
